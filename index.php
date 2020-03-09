<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

include 'header.php';

$category_1= array('id'=>1,'category_title'=>'Путешествия', 'category_slag'=>'/travel');
$category_2= array('id'=>2,'category_title'=>'Жизнь', 'category_slag'=>'/life');
$category=array($category_1,$category_2)
?>
<div class="container">
    <div class="alert alert-danger">
    <pre><?= $category[0]['category_title'] ?></pre>
    </div>
</div>

<?include 'footer.php';?>
 
