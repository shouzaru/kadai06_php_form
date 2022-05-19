<?php
// ブログ１
const ID = 1;
$title = 'phpテスト';
$content ='PHPテストです';
$post_at = '2022/05/18';
$tag = ['PHP', 'プログラミング'];
$status = true;

// ブログ２
const ID2 = 2;
$title2 = 'phpテスト2';
$content2 ='PHPテストです2';
$post_at2 = '2022/05/19';
$tag2 = ['PHP2', 'プログラミング2'];
$status2 = true;

// ブログ１を配列に入れる
$blog1 = array(
    'id' => ID,
    'title' => $title,
    'content' => $content,
    'post_at' => $post_at,
    'tag' => $tag,
    'status' => $status
);
// echo $blog1['title'];
// echo '<br>';

// ブログ２を配列に入れる
$blog2 = [
    'id2' => ID2,
    'title2' => $title2,
    'content2' => $content2,
    'post_at2' => $post_at2,
    'tag2' => $tag2,
    'status2' => $status2
];

// echo '<pre>';
// var_dump($blog2);
// echo '</pre>';

$blogs = [$blog1, $blog2];

// echo '<pre>';
// var_dump($blogs);
// echo '</pre>';

// foreach($blog1 as $blog){
//     echo '<pre>';
//     echo $blog;
//     echo '</pre>';
// }

// foreach($blog2 as $key => $value){
//     echo '<pre>';
//     echo $key . '=' . $value;
//     echo '</pre>';
// };

foreach($blogs as $blog){
    foreach($blog as $value){
        echo '<pre>';
        echo $value;
        echo '</pre>';
    }
}


?>