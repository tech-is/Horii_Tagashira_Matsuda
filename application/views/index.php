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
        <link href="./css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="article wrapper">
            <aside>
                <div class="sub_box">
                <h3 class="sub-title">けいじばん</h3>
                <ul class="sub-menu">
                    <li><a href="#">映画「窮鼠はチーズの夢を見る」は本日公開！観に行くぞ　(20)</a></li>
                    <li><a href="#">１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０　(30)</a></li>
                    <li><a href="#">上限30文字（全角）といったところかな</a></li>
                    <li><a href="#">それはそうとみんな今夜はMADMAXだよ！！ヒャッハ～～～～～！　(198)</a></li>
                </ul>
                    <button class="sub-button"type="button">＋　新規作成</button>
                </div>
            </aside>

            <article>
                <div class="article wrapper top_box">
                    <div class="a">
                        <div class ="top_top">
                            <figure class="top_figure">
                                <img src="./img/ic1.jpeg" alt="サムネイル画像">
                            </figure>
                            <div class="top_content">
                                <p class="text_date"><time datetime="2018-08-03">2018年8月3日</time></p>
                                <h2><a class="top_title" href="#">ここに掲示板のタイトルが入力される件について</a></h2>
                                <p class="top_name">投稿者：たなかさん</p>
                            </div>
                        </div>
                        <div class="top_text">
                            <p>1.<br>ここに掲示板の話題とか意見とか相談事なんかをずらずらーーっと書けると良いなぁ。何文字くらいが上限になるのかよくわからないけど、取り敢えず語れるだけ語ってほしい。
                            これが終わったら私は映画を観に行くので早く終わるぞ。</p>
                        </div>
                        <div class="edit_text">
                            <a href="#">編集</a>
                            <a href="#">削除</a>
                        </div>
                    </div>
                </div>

                <div class="article wrapper post_box">
                    <figure class="post_figure">
                        <img src="./img/ic1.jpeg" alt="サムネイル画像">
                    </figure>
                    <div class="text_content">
                        <p class="text_date"><time datetime="">5分前</time></p>
                        <p class="top_name">2. たかはしさん</p>
                        <p class="text_p">あああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                        <div class="edit_text">
                            <a href="#">編集</a>
                            <a href="#">削除</a>
                        </div>    
                    </div>
                </div>
                <div class="article wrapper post_box">
                    <figure class="post_figure">
                        <img src="./img/ic1.jpeg" alt="サムネイル画像">
                    </figure>
                    <div class="text_content">
                        <p class="text_date"><time datetime="">2分前</time></p>
                        <p class="top_name">3. たなかさん</p>
                        <p class="text_p">a</p>
                        <div class="edit_text">
                            <a href="#">編集</a>
                            <a href="#">削除</a>
                        </div>
                    </div>
                </div>
                <div class ="article wrapper textarea_box">
                    <div class="textarea_tt">
                    <textarea type="text"></textarea>
                </div>
                <div class="textarea_bb">
                    <button type="button">投稿</button>
                </div>
                </div>
    
            </article>

            <!--<footer>
                <div class="footer wrapper">
                    <p><small>&copy; 2020　チーム開発</small></p>
                </div>
            </footer>-->
    </body>
</html>
