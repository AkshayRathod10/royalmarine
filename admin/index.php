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
                            <th id="No_<?= $key; ?>"><?= $product['No'] ?> </th>
                            <td id="product_name_<?= $key; ?>">
                                <span><?= $product['product_name'] ?></span>
                                <input class="form-control" style="display:none" type="text" name="product_name" value="<?= $product['product_name'] ?>">
                            </td>
                            <td id="price_<?= $key; ?>">
                                <span><?= $product['price'] ?></span>
                                <input class="form-control" style="display:none" type="text" name="price" value="<?= $product['price'] ?>">
                            </td>
                            <td id="action_<?= $key; ?>">
                                <a href="#" class="edit" data-no='<?= $key; ?>'>Edit</a>
                                <a href="#" class="save" style="display:none;" data-no='<?= $key; ?>'>Save</a>
                            </td>
                        </tr>

                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.edit').click(function() {

                var no = $(this).data('no');

                $('#product_name_' + no + ' span').hide();
                $('#product_name_' + no + ' input').show();

                $('#price_' + no + ' span').hide();
                $('#price_' + no + ' input').show();

                $('#action_'+no+' .edit').hide();
                $('#action_'+no+' .save').show();
            })

            $('.save').click(function() {

                var no = $(this).data('no');
                var product_name = $('#product_name_' + no + ' input').val();
                var price = $('#price_' + no + ' input').val();

                var post = {
                    "save": no,
                    "product_name": product_name,
                    "price": price
                };

                $.ajax({
                    url: "save.php",
                    type: "POST",
                    data: post,
                    success: function(result) {
                        location.reload(true);
                    },
                    error: function(jqxhr, status, exception) {
                        console.log('status:', exception);
                    }
                });
            })
        });
    </script>

    <body>

</html>