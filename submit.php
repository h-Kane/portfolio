<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>介護サイト</title>
        <link rel ="stylesheet" href="stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <body>
        <header>

<pre>
<?php
print(date('l曜日'));
?
</pre>
        
        
        
            <!--<divclass="container">-->
            <!--<ul class="menu">-->
            <!--<li><a href="#" class="active" data-id="about">サイトの概要</a></li>-->
            <!--<li><a href="#" data-id="service">サービス内容</a></li>-->
            <!--<li><a href="#" data-id="contact">お問い合わせ</a></li>-->
            <!--</ul>-->
            <!--<section class="content" id="about">-->
            <!--サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。サイトの概要。-->
            <!--</section>-->
            <!--<section class="content active" id="service">-->
            <!--サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。サービス内容。-->
            <!--</section>-->
            <!--<section class="content" id="contact">-->
            <!--お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。お問い合わせ。-->
            <!--</section>-->
            
            <div class="nav">あなたの「必要に
                <strong>ぴったり</strong>」を探すサイト
                <p class="text">ぴたサーチ</p>
            </div>
            <h1>よりよいものを目指して </h1>
            <h1>より快適な生活のために </h1>
        </header>
        
        <!--<button>Run</button>-->
        <div class="box">
            <div class="boxs">
                <a href="index.1.html">
                    <img src="images/back.png" alt="">
                </a>
                <p>
                    <button>施設お探しのかたへ</button>
                </p>
                <p id = "target">お客様が探しているものにぴったりとしたご提案をします</p>
        </div>
            <div class="boxs">
                <a href="index.2.html">
                    <img src="images/back.png" alt="">
                </a>
                <p>
                    <button>各種製品をお探しのかたへ</button>
                </p>
                <p id = "target2">お客様が探しているものにぴったりとしたご提案をします</p>
            </div>
            <div class="boxs">
                <a href="index.3.html">
                    <img src="images/back.png" alt="">
                </a>
                <p>
                    <button>介護職のかたへ</button>
                </p>
                <p id = "target3">お客様が探しているものにぴったりとしたご提案をします</p>
            </div>
        </div>
        <!--<div id = "open">-->
        <!--詳細を見る-->
        <!--</div>-->
        <!--<div id ="mask" class="hidden"></div>-->
        <section id="modal" class="hidden">
            <p>このサイトでぴったりのものを探してください！</p>
            <div id="close">閉じる </div>
        </section>
        <div id="open">快適な生活とは？（クリック） </div>
        <div id="mask" class="hidden"></div>
        <button>
        
<pre>
お名前: <?php print(htmlspecialchars
($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>

            <a href="#">GO TO TOP</a>
        </button>
        <script src ="main.js"></script>
    </body>
</html>






