<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>K-G-Ban ADMIN</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- <link rel="stylesheet" href="./AdminLTE/dist/css/adminlte.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css">
</head>

<style>
  
</style>

<body>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <div style="display:flex">
<<<<<<< HEAD
            <img src="./img/logo_1.png" alt="KGBanロゴ" width="210px" height="150px;">
            <button class="btn btn-danger" style="margin-left: auto; height: 40px;">ログアウト</button>
=======
            <img src="/team_/img/logo.png" alt="KGBanロゴ" width="210px" height="150px;">
            <button class="btn btn-danger logout_btn" style="margin-left: auto; height: 40px;">ログアウト</button>
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630
          </div>
          <div style="display:flex;">
            <div class="form-group" style="margin: 30px;">
              <select name="bbsName" id="topic" class="form-control" style="width: 400px;">
                <option value="#">トピックを選択してください。</option>
                <?php foreach ($clean_topics as $clean_topic) : ?>
                  <option id="topic<?= $clean_topic['id']; ?>" value="<?= $clean_topic['id']; ?>"><?= $clean_topic['name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="button" id="topic_btn" class="btn btn-primary" style="width:100px; height: 40px; margin-top: 28px;">表示</button>
            <button type="button" id="topic_delete" class="btn btn-success" style="margin-left: 30px; height: 40px; margin-top: 28px;">トピック削除</button>
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

  <script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="./AdminLTE/dist/js/adminlte.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
          "url": "http://cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Japanese.json"
        },
      });
    });

    //トピック削除機能
    $(function(){
      $('#topic_delete').on('click', function(){
        var topic_id = document.getElementById('topic').value;
        var topic_name = document.getElementById('topic' + topic_id).innerHTML;
        swal({
          title: topic_name,
          text: "このトピックを削除してもよろしいですか？",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: './topic_delete',
                type: 'POST',
                data: {
                  'topic_id': topic_id
                }
              })
              .done((data) => {
                console.log(data);
              })
            $('#topic' + topic_id).hide();
            swal("投稿を削除しました。", "", "success");
          } else {
            swal("キャンセルしました。", "", "success");
          }
        });
      })
    })

    //投稿投稿削除
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
                url: './post_delete',
                type: 'POST',
                data: {
                  'post_id': id
                }
              })
              .done((data) => {
                console.log(data);
              })
            
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
            url: './get_post_data',
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