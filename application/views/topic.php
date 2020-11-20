<?php 
if(!empty($topic)){ 
    $i=count($topic);}
    if(!empty($post)){
    $k=count($post);
    }


?>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../jquery.simplePagination.js"></script> 
        <link rel= "stylesheet" href="../css/simplePagination.css">
        <link rel= "stylesheet" href="../css/postPagination.css">
    </head>

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
                    $j=0;
                    foreach ($topic as $t2 => $t3){
                        if($j%5==0 && $j!=0){
                            echo '</div>';
                            echo '<div class="selection" id="page-'.($j/5+1).'">';
                        }
                        echo '<li><a href="topic?id='.$t2.'&postpage=1">'.$t3.'</a></li>';                        
                        
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
                            <img src="../img/<?=$summary[3]?>" alt="サムネイル画像">
                            </figure>
                            <div class="top_content">
                                <p class="text_date"><?=$summary[2]?></p>
                                <h2><a class="top_title" href="#"><?=$summary[0]?></a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="top_text">
                        <p><?= $summary[1] ?></p>
                    </div>
                </div>

                <div class="article wrapper textarea_box">
                    <div class="textarea_tt">
                    <form method="POST" action="topic?id=<?=$id?>&postpage=1">
                        <textarea type="text" name="name" rows="1" 　id="name" placeholder="投稿名"></textarea>
                        <div class="textarea_bb">
                            <textarea type="text" name="text" rows="3" cols="60" placeholder="内容"></textarea>
                        </div>
                        <button type="submit" name="btn_submit" value="投稿">投稿</button>
                    </form>
                </div>
                
                <?php
                    if(!empty($post)){
                        
                        for ($l=0;$l<10;$l++){
                            if(!empty($post[($postpage-1)*10+$l])){
                        ?>
                <div class="article wrapper post_box">
                    <figure class="post_figure">
                        <img src="../img/logo-06.png" alt="サムネイル画像">
                    </figure>

                    <div class="text_content">
                    <p class="text_date"><?=$post[($postpage-1)*10+$l]['date']?></p>
                        <p class="top_name">投稿者：<?=$post[($postpage-1)*10+$l]['name']?></p>
                        <p class="text_p"><?=$post[($postpage-1)*10+$l]['text']?></p>
                        
                    </div>
                </div>
                <?php }
                    }
                    require "postpagination.php";
                pager($postpage, $k,$id);
                    }
                ?>
 
    
            </article>

        <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
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
</html>