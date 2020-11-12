<?php 
$i=count($topic);

?>
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
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./jquery.simplePagination.js"></script> 
        <link rel= "stylesheet" href="./css/simplePagination.css">
        
    </head>

    <body>
        <div class="article wrapper">
            <aside>
                <div class="sub_box">
                <div class="sub_logo">
                    <img src="./img/logo-02.png" width="80%" height="80%">
                </div>
                <ul class="sub-menu">
                <div class="selection" id="page-1">
                    <?php
                    $j=0;
                    foreach ($topic as $t2 => $t3){
<<<<<<< HEAD
                        echo '<li><a href=".Bbs/topic?id='.$t2.'">'.$t3.'</a></li>';
                    }?>
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
=======
                        if($j%5==0 && $j!=0){
                            echo '</div>';
                            echo '<div class="selection" id="page-'.($j/5+1).'">';
                        }
                        echo '<li><a href="Bbs/topic?id='.$t2.'">'.$t3.'</a></li>';                        
                        
                        $j++;
                    }?>
                    </div> 
                    <div class="pagination-holder clearfix">
            <div id="light-pagination" class="pagination"></div>
                </div>  
>>>>>>> 5c7a03baca88951120e227c0ecaf85f44240b630
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
