<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$qy = htmlspecialchars($_POST['qy'], ENT_QUOTES);

echo "名前は" . $name . "<br />" . "注文商品は" . $item . "<br />" . "注文数は" . $qy . "<br />";
