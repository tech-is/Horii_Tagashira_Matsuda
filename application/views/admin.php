<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>K-G-Ban ADMIN</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="./AdminLTE/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<style>
  .box-read {
    width: 300px;
    max-width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .delete_btn {
    width: 100%;
  }

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .modal {
    display: none;
    height: 100vh;
    position: fixed;
    top: 0;
    width: 100%;
  }

  .modal__bg {
    background: rgba(0, 0, 0, 0.8);
    height: 100vh;
    position: absolute;
    width: 100%;
  }

  .modal__content {
    background: #fff;
    left: 50%;
    padding: 40px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 60%;
  }
</style>

<body>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <div style="display:flex">
            <img src="./img/logo.png" alt="KGBanロゴ" width="210px" height="150px;">
            <button class="btn btn-danger" style="margin-left: auto; height: 40px;">ログアウト</button>
          </div>
          <div style="display:flex;">
            <div class="form-group" style="margin: 30px;">
              <select name="bbsName" id="topic" class="form-control" style="width: 400px;">
                <option value="#">トピックを選択してください。</option>
                <?php foreach ($clean_topics as $clean_topic) : ?>
                  <option value="<?= $clean_topic['id']; ?>"><?= $clean_topic['name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="button" id="topic_btn" class="btn btn-primary" style="width:100px; height: 40px; margin-top: 28px;">表示</button>
            <button type="button" id="topic_delete" class="btn btn-success" style="margin-left: 30px; height: 40px; margin-top: 28px;">トピック削除</button>
            <div class="modal js-modal">
              <div class="modal__bg js-modal-close"></div>
              <div class="modal__content">
                <p>aaa</p>
                <a class="js-modal-close" href="">閉じる</a>
              </div>
              <!--modal__inner-->
            </div>
            <!--modal-->
          </div>
          <table class="table table-striped table-bordered" id="lingTable">
            <thead style="text-align: center">
              <tr>
                <th>番号</th>
                <th>名前</th>
                <th>本文</th>
                <th>画像</th>
                <th>削除パス</th>
                <th>削除</th>
              </tr>
            </thead>
            <tbody id="post"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="./AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="./AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./AdminLTE/dist/js/adminlte.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    //データテーブル生成
    $(document).ready(function() {
      $('#lingTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
        },
      });
    });

    //トピック削除用モーダル
    $(function() {
      $('#topic_delete').on('click', function(){
        $('.js-modal').fadeIn();
        return false;
      })
      $('.js-modal-close').on('click', function() {
        $('.js-modal').fadeOut();
        return false;
      });
    });

    //投稿削除
    function post_delete(id) {
      swal({
          title: "削除してもよろしいですか？",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: './Admin/post_delete',
                type: 'POST',
                data: {
                  'post_id': id
                }
              })
              .done((data) => {
                console.log(data);
              })
            $('#' + id).hide();
            swal("投稿を削除しました。", "", "success");
          } else {
            swal("キャンセルしました。", "", "success");
          }
        });
    }

    //投稿データ切り替え
    $(function() {
      $('#topic_btn').on('click', function() {
        $.ajax({
            url: './Admin/get_post_data',
            type: 'POST',
            data: {
              'topic_id': $('#topic').val()
            }
          })
          .done((data) => {
            console.log(data);
            const tr = document.getElementById('post')
            const obj = JSON.parse(data);
            while (tr.firstChild) {
              tr.removeChild(tr.firstChild);
            }
            obj.forEach(function(value) {
              $('#post').append("<tr id=\"" + value['id'] + "\"><td>" + value['id'] + "</td><td>" + value['name'] + "</td><td class=\"box-read\">" + value['text'] +
                "</td><td>" + value['img'] + "</td><td>" + value['delete_pass'] + "</td><td><button class=\"delete_btn btn btn-danger\" onclick=\"post_delete(" + value['id'] + ")\">削除</button></td>");
            })
          })
      })
    })
  </script>
</body>

</html>