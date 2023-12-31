<?php

$routes = [
    'home' => 'main|index',
    'about' => 'about|index',
    'contacts' => 'contacts|index',
    'error' => 'error404|index',
    'account' => 'account|index',
    'account/exit' => 'account|exit',
    'register' => 'register|index',
    'cart' => 'cartPage|index',
    'login' => 'login|index',
    'cart/decrease/.*' => 'cartPage|decrease',
    'cart/increase/.*' => 'cartPage|increase',
    'cart/delete/.*' => 'cartPage|delete',
    'product/views/.*' => 'product|index',
    'product/buy/.*' => 'product|buy',
    'category/views/.*' => 'category|index',

    '@admin' => 'admin|index',
    '@admin/login' => 'admin|login',
    '@admin/exit' => 'admin|exit',
    '@admin/products' => 'admin|products',
    '@admin/orders' => 'admin|orders',
    '@admin/users' => 'admin|users',
    '@admin/settings' => 'admin|settings',
    '@admin/categories' => 'admin|categories',
    '@admin/delcat/.*' => 'admin|delcat',
];


