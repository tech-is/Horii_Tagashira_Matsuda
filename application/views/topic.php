<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BBS</title>
        <link rel="icon" type="image/png" href=*>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="article wrapper">
            <aside>
                <div class="sub_box">
                <h3 class="sub-title">けいじばん</h3>
                <ul class="sub-menu">
                    <?php
                    foreach ($topic as $t2 => $t3){
                        echo '<li><a href="topic?id='.$t2.'">'.$t3.'</a></li>';
                    }?>
                </ul>
                <a href="newpage"><button class="sub-button"type="button">＋　新規作成</button></a>
                </div>
            </aside>

            <article>
                <div class="article wrapper top_box">
                    <div class="a">
                        <div class ="top_top">
                            <figure class="top_figure">
                                <img src="/team2/Horii_Tagashira_Matsuda/img/ic1.jpeg" alt="サムネイル画像">
                            </figure>
                            <div class="top_content">
                                <p class="text_date"><time datetime="2018-08-03">XXXX年XX月XX日</time></p>
                                <h2><a class="top_title" href="#"><?=$summary[0]?></a></h2>
                                
                            </div>
                        </div>
                        
                        <div class="top_text">
                            <p><?=$summary[1]?></p>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class ="article wrapper textarea_box">
                    <div class="textarea_tt">
                        <form method="POST" action="topic?id=<?=$id?>">
                        <P>　投稿名</P>
                        <textarea type="text" name="name" rows="1"　id="name"></textarea>
                            <div class="textarea_bb">
                                
                                <textarea type="text" name="text" rows="3" cols="60"></textarea>                              
                        <button type="submit" name="btn_submit" value="投稿">投稿</button>
                            </div>    
                        </form>
                    </div>
                </div>
                <?php
                    if(!empty($post)){
                    foreach ($post as $p2 => $p3){?>
                <div class="article wrapper post_box">
                    <figure class="post_figure">
                        <img src="/team2/Horii_Tagashira_Matsuda/img/ic1.jpeg" alt="サムネイル画像">
                    </figure>

                    <div class="text_content">
                        <p class="text_date"><time datetime="">5分前</time></p>
                        <p class="top_name">投稿者：<?=$p2?></p>
                        <p class="text_p"><?=$p3?></p>
                        <div class="edit_text">
                            <a href="#">編集</a>
                            <a href="#">削除</a>
                        </div>    
                    </div>
                </div>
                <?php }
                    }?>
                
                
    
            </article>

            <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
    </body>
</html>