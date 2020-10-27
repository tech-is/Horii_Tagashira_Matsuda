<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BBS</title>
        <link rel="icon" type="./image/png" href=*>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="/Horii_Tagashira_Matsuda-master/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="article wrapper">
            <aside>
                <div class="sub_box">
                <h3 class="sub-title">けいじばん</h3>
                <ul class="sub-menu">
                    <?php
                    foreach ($topic as $t2 => $t3){
                        echo '<li><a href="Bbs/topic?id='.$t2.'">'.$t3.'</a></li>';
                    }?>
                
        
                </ul>
                    <a href="Bbs/newpage"><button class="sub-button"type="button">＋　新規作成</button></a>
                </div>
            </aside>

            <article>

            </article>

            <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
    </body>
</html>
