<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .product-card {
            margin: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-card img {
            width: 100%;
            height: 50%;
            object-fit: cover;
        }
        .product-card .product-details {
            padding: 20px;
            text-align: center;
        }
        .product-card .product-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .product-card .product-details a {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Home Products</h1>
    </div>
    <div class="container">
        <?php
        $products = array(
            array(
                'name' => 'Gas Stove',
                'image' => 'gasStove.jpg',
                'url' => 'http://127.0.0.1:8000/gasStove'
            ),
            array(
                'name' => 'Vacuum Cleaner',
                'image' => 'vacuumCleaner 1.jpg',
                'url' => 'http://127.0.0.1:8000/vacuumCleaner'
            ),
            array(
                'name' => 'Washing Machine',
                'image' => 'washingMachine.jpg',
                'url' => 'http://127.0.0.1:8000/washingMachine'
            ),
            array(
                'name' => 'Dishwasher',
                'image' => 'dishwasher.jpg',
                'url' => 'http://127.0.0.1:8000/dishwasher'
            ),
            array(
                'name' => 'Fridge',
                'image' => 'fridge 1.jpg',
                'url' => 'http://127.0.0.1:8000/fridge'
            )
        );
        foreach ($products as $product) {
        ?>
        <div class="product-card">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <div class="product-details">
                <h2><?php echo $product['name']; ?></h2>
                <a href="<?php echo $product['url']; ?>">View Details</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>