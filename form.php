<?php
$post = $_POST;
$your_name = $post['your_name'];
$your_name_kana = $post['your_name_kana'];
$your_email =$post['your_email'];
$kikkake = $post['kikkake'];
$Motivation = implode(",", $post['Motivation']);    //配列を受け取る。","で区切って表示。
$detail = $post['detail'];
$error = [];

if(!empty($post)){
    if($your_name == ""){
        echo 'お名前を入力してください';
        echo '<br>';}
    if($your_name_kana == ""){
        echo 'カナを入力してください';
        echo '<br>';}
    if($your_email == ""){
        echo 'メールアドレスを入力してください';
        echo '<br>';}
    if($Motivation == ""){
        echo '志望動機を選択してください';
        echo '<br>';}
}

?>



<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            text-align:center;
        }
        table{
            border-collapse: collapse;
                margin: 0 auto;

        }
        th, td{
            border: 1px solid;
            border-color: #bfbfbf;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>受取り</title>
</head>
<body>
    <h1>送信結果</h1>
    <table>
        <tr>
            <th>お名前</th>
            <td><?=$your_name?></td>
        </tr>
        <tr>
            <th>カナ</th>
            <td><?=$your_name_kana?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?=$your_email?></td>
        </tr>
        <tr>
            <th>チーズアカデミーを<br>知ったきっかけ</th>
            <td><?=$kikkake?></td>
        </tr>
        <tr>
            <th>志望動機</th>
            <td><?=$Motivation?></td>
        </tr>
        <tr>
            <th>その他お問合せ</th>
            <td><?=$detail?></td>
        </tr>
    </table>
    <br>
    <a href="index.html">チーズアカデミーのホームページに戻る</a>

    
</body>
</html>