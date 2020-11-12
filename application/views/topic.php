<?php 
$i=count($topic);


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>BBS</title>
    <link rel="icon" type="image/png" href=*>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
=======
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../jquery.simplePagination.js"></script> 
        <link rel= "stylesheet" href="../css/simplePagination.css">
    </head>
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630

<body>
    <div class="article wrapper">
        <aside>
            <div class="sub_box"> 
               <div class="sub_logo">
                    <img src="../img/logo-02.png" width="80%" height="80%">
                </div>
                <ul class="sub-menu">
                <div class="selection" id="page-1">
                    <?php
<<<<<<< HEAD
                    foreach ($topic as $t2 => $t3) {
                        echo '<li><a href="topic?id=' . $t2 . '">' . $t3 . '</a></li>';
                    } ?>
                </ul>
                <nav class="navi">
                    <div class="pagination">
                        <a class="pagenum prev" href="#">prev</a>
                        <span aria-current="page" class="pagenum current">1</span>
                        <a class="pagenum" href="#">2</a>
                        <a class="pagenum" href="#">3</a>
                        <a class="pagenum" href="#">4</a>
                        <a class="pagenum" href="#">5</a>
                        <a class="pagenum next" href="#">next</a>
                    </div>
                </nav>
                <a href="newpage"><button class="sub-button" type="button">＋　新規作成</button></a>
            </div>
        </aside>

        <article>
            <div class="article wrapper top_box">
                <div class="a">
                    <div class="top_top">
                        <figure class="top_figure">
                            <img src="../img/logo-03.png" alt="サムネイル画像">
                        </figure>
                        <div class="top_content">
                            <p class="top_date"><time datetime="2018-08-03">XXXX年XX月XX日</time></p>
                            <h2><a class="top_title" href="#"><?= $summary[0] ?></a></h2>
=======
                    $j=0;
                    foreach ($topic as $t2 => $t3){
                        if($j%5==0 && $j!=0){
                            echo '</div>';
                            echo '<div class="selection" id="page-'.($j/5+1).'">';
                        }
                        echo '<li><a href="topic?id='.$t2.'">'.$t3.'</a></li>';                        
                        
                        $j++;
                    }?>
                    </div> 
                    <div class="pagination-holder clearfix">
            <div id="light-pagination" class="pagination"></div>
                </div>  
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
                                <p class="text_date"><?=$summary[2]?></p>
                                <h2><a class="top_title" href="#"><?=$summary[0]?></a></h2>
                                
                            </div>
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630
                        </div>
                    </div>

                    <div class="top_text">
                        <p><?= $summary[1] ?></p>
                    </div>
                </div>
            </div>

            <div class="article wrapper textarea_box">
                <div class="textarea_tt">
                    <form method="POST" action="topic?id=<?= $id ?>">
                        <textarea type="text" name="name" rows="1" 　id="name" placeholder="投稿名"></textarea>
                        <div class="textarea_bb">
                            <textarea type="text" name="text" rows="3" cols="60" placeholder="内容"></textarea>
                        </div>
                        <button type="submit" name="btn_submit" value="投稿">投稿</button>
                    </form>
                </div>
<<<<<<< HEAD
            </div>
            <?php
            if (!empty($post)) {
                foreach ($post as $p2 => $p3) { ?>
                    <div class="article wrapper post_box">
                        <figure class="post_figure">
                            <img src="../img/logo-04.png" alt="サムネイル画像">
                        </figure>

                        <div class="text_content">
                            <p class="text_date"><time datetime="">5分前</time></p>
                            <p class="top_name">投稿者：<?= $p2 ?></p>
                            <p class="text_p"><?= $p3 ?></p>
                            <div class="edit_text">
                                <a href="#">編集</a>
                                <a href="#">削除</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
=======
                
                <?php
                    if(!empty($post)){
                        
                    foreach ($post as $p2){
                        ?>
                <div class="article wrapper post_box">
                    <figure class="post_figure">
                        <img src="/team2/Horii_Tagashira_Matsuda/img/ic1.jpeg" alt="サムネイル画像">
                    </figure>

                    <div class="text_content">
                        <p class="text_date"><?=$p2['date']?></p>
                        <p class="top_name">投稿者：<?=$p2['name']?></p>
                        <p class="text_p"><?=$p2['text']?></p>
                        
                    </div>
                </div>
                <?php }
                    }
                ?>
 
    
            </article>
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630



        </article>

        <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
<<<<<<< HEAD
</body>

=======
            <script type="text/javascript">
    
    $(function () {
        $(".pagination").pagination({
        items: <?php echo $i/5?>,
        displayedPages: 5,
        prevText:"前へ",
        nextText:"次へ",
        cssStyle: 'light-theme',
        onPageClick: function (currentPageNumber) {
            showPage(currentPageNumber);
            }
        })
    });
    function showPage(currentPageNumber) {
    var page = "#page-" + currentPageNumber;
    $('.selection').hide();
    $(page).show();
    }

   
</script>
    </body>
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630
</html>