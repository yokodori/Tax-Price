<?php
function taxrate_10($origin_price) {
    return $origin_price * 0.1;
}

$origin_price = 500;
$include_tax = taxrate_10($origin_price);
$paid_price = $include_tax;
echo ("私は{$include_tax}円を支払います。");
?>