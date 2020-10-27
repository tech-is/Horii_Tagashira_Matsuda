<?php

if(!empty($_POST['btn_submit'])){?>

    <div class="article wrapper new_new">
    <div class="newpost_box">
        <h3 class="newpost_top">トピック作成完了</h3> 
        <div style="text-align:center">
        <a href="../"><button class="sub-button"type="button">戻る</button></a>
        </div>
<?php }?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規作成</title>
        <link rel="icon" type="image/png" href=*>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

    </head>

    <?php
    if(empty($_POST['btn_submit'])){?>
    <body>
    
        <div class="article wrapper new_new">
            <div class="newpost_box">
                <h3 class="newpost_top">新規トピック作成</h3>
                    <form class="newpost" method="POST">
                    <dl>
                        <dt>タイトル</dt>
                        <dd><input type="text" name="name"></input></dd>
                        <dt>内容</dt>
                        <dd><textarea type="text" name="summary"></textarea></dd>
                    </dl>
                    <div class="btn">
                        <a href="../"><button class="sub-button"type="button">戻る</button></a>
                        <button type="submit" name="btn_submit" value="投稿">投稿</button>
                    </div>
            </div>
        </form>
        </div>

            <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
            <?php } ?>
    </body>
  <php }?>  
</html>