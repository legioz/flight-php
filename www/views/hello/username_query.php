<?= $head_content ?>
<?= $header_content ?>

<?php 
$username = Flight::request()->query->username;
$username2 = $_GET['username'];

echo "Hello " . $username;
echo "<br> ou<br>";
echo "Hello " . $username2;
