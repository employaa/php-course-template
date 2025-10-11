<?php
$product1 = "Ламба";
$product2 = "Фэро";
$product3 = "ЛитЭнерджиКлассик";
$product4 = "ЛитЭнерджиЧипсы";
$product5 = "Нэскоффе";
$product6 = "СникерсКриспи";
$product7 = "БернЦитрусНоуШугар";
$product8 = "Яхта";
$product9 = "Дубаи";
$product10 = "ШМотки Версачи";
$product11 = "БррБррПатапим";
$product12 = "Балерино Капучино";
$product13 = "Тралолеро Тралала";
$product14 = "Миньён";
$product15 = "Лабуба";

$price1 = "2500";
$price2 = "3500";
$price3 = "2100";
$price4 = "3200";
$price5 = "3143";
$price6 = "3424";
$price7 = "7000";
$price8 = "999999";
$price9 = "242423";
$price10 = "123123";
$price11 = "666666";
$price12 = "777";
$price13 = "6767";
$price14 = "5252";
$price15 = "4242";

$products = [  
    $product1, $product2, $product3, $product4, $product5,  
    $product6, $product7, $product8, $product9, $product10,  
    $product11, $product12, $product13, $product14, $product15  
];  
  
$prices = [  
    $price1, $price2, $price3, $price4, $price5,  
    $price6, $price7, $price8, $price9, $price10,  
    $price11, $price12, $price13, $price14, $price15
    ]
    ?>
<div class="product-list">
    <h2>Товары и цены<h3>

    <?php for ($i = 0; $i < count ($products); $i++) { ?>
    <div class= "product-card">
        <div class="product-name"><?= $products[$i]?></div>
        <div class="product-price"><?= $prices[$i]?> Р</div>
    </div>
    <?php } ?>
</div>
?>