<?php
    $bodys = ["頭部", "首", "右手,左手", "腹部", "背中", "臀部", "右足,左足", "足首", "足", "その他", "手の指"];
   
?> 
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>施設を探す</title>
     <link rel ="stylesheet" href="stylesheet.2.css">
     

     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<div class=container>
    <strong>
        <fieldset>
            <legend>体のどの部分に関わる製品をお探しですか？（複数選択可）</legend>
            <label><input type="checkbox">頭部<label>
            <label><input type="checkbox">首<label>
            <label><input type="checkbox">右手、左手<label>
            <label><input type="checkbox">腹部<label>
            <label><input type="checkbox">背中<label>
            <label><input type="checkbox">臀部<label>
            <label><input type="checkbox">右足、左足<label>
            <label><input type="checkbox">足首<label>
            <label><input type="checkbox">足<label>
            <label><input type="checkbox">その他<label>
            </legend>
        </fieldset>
    </strong>
</div>  
<div class=container>
    <strong>
        <fieldset>
            <legend>体のどの部分に関わる製品をお探しですか？（複数選択可）</legend>
            <?php /*foreach($bodys as $body){*/ ?>
            <?php foreach($bodys as $body){ ?>
            <label><input type="checkbox"><?php print $body; ?><label>
            <?php } ?>
            </legend>
        </fieldset>
    </strong>
    <select>
        <?php foreach($bodys as $body){ ?>
        <!--<option><?php /*print $body;*/ ?></option>--> <!--phpプログラムの埋め込み、タグを作り出している、phpとhtmlが融合する-->
        <option><?php print $body; ?></option>
        <?php } ?>
    </select>
</div>  
<div class=container1>
    <strong>
        <fieldset>
            <legend>どのような時に使いますか？（複数選択可）</legend>
            <label><input type="checkbox">外出する時<label>
            <label><input type="checkbox">運転する時<label>
            <label><input type="checkbox">散歩する時<label>
            <label><input type="checkbox">買い物する時<label>
            <label><input type="checkbox">寝るとき<label>
            <label><input type="checkbox">入浴する時<label>
            <label><input type="checkbox">家事をするとき<label>
            <label><input type="checkbox">料理する時<label>
            <label><input type="checkbox">その他<label>
            </legend>
        </fieldset>
    </strong>
</div>

<div class="box">
<p>その他お探しのものは下記にお問い合わせください</p>
<p>
03-xxxx-xxxx
</p>
<script src ="main.2.js"></script>
</body>
</html>



