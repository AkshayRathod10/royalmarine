<?php include 'templates/header.php'; ?>

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php

                $categories = array_unique($categories);

                ?>
                <?php foreach($categories as $category): ?>
                    <div class="my-3"><?= ucfirst(strtolower($category)); ?></div>
                <?php endforeach; ?>

            </div>
            <div class="col-md-9">
                <div class="row">

                    <?php foreach ($products as $key => $product) : ?>
                        <div class="col-md-3">
                            <div class="product mb-3">
                                <div class="product-img border">
                                    <img src="products/<?= $product['image'] ?>" class="w-100" alt="">
                                </div>
                                <div class="product-name my-2">
                                    <h5><a href="product.php?id=<?= $product['No']; ?>"><?= $product['product_name'] ?></a></h5>
                                </div>
                                <div class="product-price">
                                    <span><?= $product['price'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include 'templates/footer.php'; ?>