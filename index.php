<?php include 'templates/header.php'; ?>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <!-- <div class="left-content">
        <div class="thumb">
            <div class="inner-content">
                <h4>Royal Marine Aquarium</h4>
                <span>Awesome, clean &amp; creative HTML5 Template</span>
                <div class="main-border-button">
                    <a href="#">Purchase Now!</a>
                </div>
            </div>
            <img src="assets/images/dmitry-bukhantsov-IBrZ-TXYWY8-unsplash.jpg" alt="">
        </div>
    </div> -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="right-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="right-first-image">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4>Dry products</h4>
                                </div>
                                <div class="hover-content">
                                    <div class="inner">
                                        <h4>Dry products</h4>
                                        <div class="main-border-button">
                                            <a href="#subscribe">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/maintenance.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-first-image">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4>Live stock</h4>
                                </div>
                                <div class="hover-content">
                                    <div class="inner">
                                        <h4>Live stock</h4>
                                        <div class="main-border-button">
                                            <a href="#subscribe">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/live_stock.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-first-image">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4>Maintenance</h4>
                                </div>
                                <div class="hover-content">
                                    <div class="inner">
                                        <h4>Maintenance</h4>
                                        <div class="main-border-button">
                                            <a href="#subscribe">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/maintenance.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-first-image">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4>Custom tanks</h4>
                                </div>
                                <div class="hover-content">
                                    <div class="inner">
                                        <h4>Custom tanks</h4>
                                        <div class="main-border-button">
                                            <a href="#subscribe">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/tank.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container products">
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
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe" id="subscribe">
    <div class="container">
        <div class="section-heading">
            <h2>Contact us</h2>
        </div>
        <div class="row">
            <div class="col-lg-8">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5012125092726!2d72.85049171349742!3d19.12952555526211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7d54823ffe1%3A0x1453efb8454df066!2sNatwar%20Nagar%20Rd%20Number%205%2C%20Saraswati%20Baug%2C%20Natwar%20Nagar%2C%20Jogeshwari%20East%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1667636568037!5m2!1sen!2sin" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>3/10 Sahyadri cottage, Jogeshwari east</span></li>
                            <li>Phone:<br><span><a href="tel:9619332991">9619332991</a> / <a href="tel:9773199523">9773199523</a></span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span><a href="mailto:royalmarine2991@gmail.com">royalmarine2991@gmail.com</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->

<?php include 'templates/footer.php'; ?>