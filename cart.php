<?php require 'inc/head.php';
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if(count($liste)===1){
            echo " <div class=\"container-fluid text-left\"><strong>Your cart is empty :-(</strong></div>";
        }


        for ($i = 1; $i < count($liste); $i++) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $liste[$i]; ?>.jpg" alt="<?= $catalog[$liste[$i]]['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[$liste[$i]]['name']; ?></h3>
                        <p><?= $catalog[$liste[$i]]['description']; ?></p>

                    </figcaption>
                </figure>
            </div>
        <?php }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
