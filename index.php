<!DOCTYPE html>
<html>
<link rel="stylesheet" href="stylesheet.css">
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
  </head>
  <body>
    <h1 class="title">HTML & CSS の開発環境を用意しよう！</h1>
    <?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
 foreach ($menus as $menu) {
   echo $menu['name'].'は'.$menu['price'].'円です';
    echo '<br>';
}

?>
  </body>
</html>
