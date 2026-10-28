<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;

$subtotal = $price * $quantity;
$tax = $subtotal * 0.1;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品価格計算</title>
</head>

<body>
    <p>商品名:<?= $product_name ?></p>
    <p>単価:<?= number_format($price) ?>円</p>
    <p>数量:<?= $quantity ?>個</p>
    <p>小計:<?= number_format($subtotal) ?>円</p>
    <p>消費税（10%）:<?= number_format($tax) ?>円</p>
    <p><strong>合計金額:<?= number_format($total) ?>円</strong></p>
</body>

</html>