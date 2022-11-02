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
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
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
                                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                        <div class="main-border-button">
                                            <a href="#">Discover More</a>
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
                                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                        <div class="main-border-button">
                                            <a href="#">Discover More</a>
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
                                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                        <div class="main-border-button">
                                            <a href="#">Discover More</a>
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
                                        <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                        <div class="main-border-button">
                                            <a href="#">Discover More</a>
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
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php

                $categories = array_unique($categories);

                ?>
                <?php foreach ($categories as $cat_key => $category) : ?>
                    <div class="my-3"><a href="category.php?id=<?= $cat_key; ?>"><?= ucfirst(strtolower($category)); ?></a></div>
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
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Explore Our Products</h2>
                    <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                    </div>
                    <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                    <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                    <div class="main-border-button">
                        <a href="products.html">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Leather Bags</h4>
                                <span>Latest Collection</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="assets/images/explore-image-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="assets/images/explore-image-02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Different Types</h4>
                                <span>Over 304 Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe" id="subscribe">
    <div class="container">
        <div class="section-heading">
            <h2>Contact us</h2>
            <span>Details to details is what makes Hexashop different from the other themes.</span>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30158.900498215404!2d72.85222418679325!3d19.113684372260344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83c05b7fc89%3A0xbe87eb057f3aafda!2sAndheri%2C%20Maharashtra%20400053!5e0!3m2!1sen!2sin!4v1665930004756!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                            <li>Phone:<br><span><a href="tel:9619332991">9619332991</a> / <a href="tel:9773199523">9773199523</a></span></li>
                            <li>Office Location:<br><span>North Miami Beach</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                            <li>Email:<br><span><a href="mailto:royalmarine2991@gmail.com">royalmarine2991@gmail.com</a></span></li>
                            <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->

<?php include 'templates/footer.php'; ?>