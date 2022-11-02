<?php include 'templates/header.php'; ?>

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Categories</h4>
                <?php

                $categories = array_unique($categories);
                $category_id = 0;
                if (isset($_GET['id'])) {
                    $category_id = $_GET['id'];
                }

                $filter_category = strtoupper($categories[$category_id]);

                ?>
                <?php foreach ($categories as $cat_key => $category) : ?>
                    <div class="my-3"><a href="category.php?id=<?= $cat_key; ?>"><?= ucfirst(strtolower($category)); ?></a></div>
                <?php endforeach; ?>

            </div>
            <div class="col-md-9">
                <h3 class="mb-3"><?= $filter_category; ?></h3>
                <div class="row">
                    <?php foreach ($products as $key => $product) : ?>

                        <?php
                            if ($product['category'] != $filter_category) {
                                continue;
                            }
                        ?>
                        <div class="col-md-3">
                            <div class="product mb-3">
                                <div class="product-img border">
                                    <img src="products/<?= $product['image'] ?>" class="w-100" alt="">
                                </div>
                                <div class="product-name my-2">
                                    <div><a href="product.php?id=<?= $product['No']; ?>"><?= $product['product_name'] ?></a></div>
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