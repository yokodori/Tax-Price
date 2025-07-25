<?php
function taxrate_10(int $origin_price): array {
    return [
        'tax_price' => round($origin_price * 0.1),
        'include_tax' => round($origin_price * 1.1),
    ];
}

$origin_price = 500;
$tax_price = taxrate_10($origin_price)['tax_price'];
$include_tax = taxrate_10($origin_price)['include_tax'];
echo ("私は{$include_tax}円を支払います。そのうち税額は{$tax_price}です。");
?>