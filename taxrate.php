<?php
function taxrate_10(int $origin_price): int {
    return round($origin_price * 1.1);
}

$origin_price = 500;
$include_tax = taxrate_10($origin_price);
echo ("私は{$include_tax}円を支払います。");
?>