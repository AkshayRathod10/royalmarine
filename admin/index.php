<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/fav.ico">
    <title>Royal Marine Aquarium</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <?php

    $json = file_get_contents('../products.json');

    // Decode the JSON file
    $products = json_decode($json, true);

    $categories = [];

    $search = '';

    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $search = $_POST['search'];
    }

    print_r($products[1]);

    ?>
    <div class="container">

        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Search product</label>
                <input type="text" class="form-control" name="search">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Search</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $key => $product) : ?>

                    <?php if (preg_match('/' . $search . '/', $product['product_name'])) : ?>

                        <tr>
                            <th><?= $product['No'] ?></th>
                            <td><?= $product['product_name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td> <a href="#">Edit</a> </td>
                        </tr>

                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>



    <body>

</html>