<?php include 'templates/header.php'; ?>

<div class="main-banner">

    <?php

    $product_id = 0;
    $product_data = '';

    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
    }

    if (key_exists($product_id, $products)) {
        $product_data = $products[$product_id];;
    }

    ?>
    <?php if (!empty($product_data)) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single_img border">
                        <img src="products/<?= $product_data['image']; ?>" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2><?= $product_data['product_name']; ?></h2>
                    <p class="product-price"><?= $product_data['price']; ?></p>
                    <div class="category">
                        Category: <?= ucfirst(strtolower($product_data['category'])); ?>
                    </div>
                    <div class="main-border-button mt-3">
                        <a href="index.php#subscribe" class="btn btn-primary">Contact Us</a>
                        <?php 
                        
                            $product_name =  urlencode($product_data["product_name"]);
                            $link = "https://wa.me/919619332991?text=I%20want%20to%20purchase%20-%20$product_name";
                        ?>
                        <a href="<?php echo $link ?>" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <h4>Description:</h4>
                    <p><?= $product_data['description']; ?></p>
                </div>
            </div>

        </div>
    <?php else : ?>
        <div class="container text-center">
            <h1>404 Page not found!</h1>
        </div>
    <?php endif; ?>
</div>
<?php include 'templates/footer.php'; ?>