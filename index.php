<?php
    require 'App/User.php';
    require 'Database/model/ProductModel.php';
    require 'vendor/autoload.php';
    
    $user = new App\user();
    echo $user->getName();
    $product = new Database\model\ProductModel();
    echo "\n";
    echo $product->getId();
?>
