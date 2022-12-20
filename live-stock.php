<?php include 'templates/header.php'; ?>

<div class="main-banner">
    <?php

    // Read the JSON file 
    $json = file_get_contents('live_stock.json');

    // Decode the JSON file
    $live_stocks = json_decode($json, true);


    ?>
    <div class="container">
        <div class="row">
            <?php foreach ($live_stocks as $key => $single) : ?>
                <?php

                $image = $single['image'];
                $src = "assets/images/live-stock/$image";

                ?>
                <?php if (file_exists($src)) : ?>
                    <div class="col-md-4">
                        <div class="m-3">
                            <?= "<image src='$src'>"; ?>
                            <div class="fish-name text-center mt-2">
                                <?= $single['Name']; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<?php include 'templates/footer.php'; ?>