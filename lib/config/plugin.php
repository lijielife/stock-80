<?php

return array(
    'name' => 'Акции',
    'description' => 'Возможность организовать акцию на сайте',
    'vendor'=>903438,
    'version'=>'1.0.0',
    'img'=>'img/stock.png',
    'frontend'    => true,
    'handlers' => array(
        'backend_product' => 'backendProduct',
        'frontend_product' => 'frontendProduct',
        'order_calculate_discount' => 'orderCalculateDiscount',
        'frontend_nav' => 'frontendNav',
    ),

);