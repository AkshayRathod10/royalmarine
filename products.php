<?php include 'templates/header.php'; ?>

<div class="main-banner">
    <div class="container products">
        <h1 class="text-center mb-5">Products</h1>
        <div class="row">
            <div class="col-md-3">
                <h4>Categories</h4>
                <?php $categories = array_unique($categories); ?>
                <?php foreach ($categories as $cat_key => $category) : ?>
                    <div class="my-3"><a href="category.php?id=<?= $cat_key; ?>"><?= ucfirst(strtolower($category)); ?></a></div>
                <?php endforeach; ?>

            </div>
            <div class="col-md-9">
                <div class="row paginate">

                    <?php foreach ($products as $key => $product) : ?>
                        <div class="col-md-3 items">
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
                    <div class="pager">
                        <div class="firstPage">&laquo;</div>
                        <div class="previousPage">&lsaquo;</div>
                        <div class="pageNumbers"></div>
                        <div class="nextPage">&rsaquo;</div>
                        <div class="lastPage">&raquo;</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include 'templates/footer.php'; ?>