<?php

$json = file_get_contents('../products.json');

// Decode the JSON file
$products = json_decode($json, true);

$output = array(
    "status" => "Failed"
);

if (isset($_POST['save']) && !empty($_POST['save'])) {
    # code...
    $no = $_POST['save'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    
    $products[$no]['product_name'] = $product_name;
    $products[$no]['price'] = $price;
    $json_data = json_encode($products);
    file_put_contents('../products.json', $json_data);
    
    $output['status'] = "Success";
}

echo json_encode($output);
