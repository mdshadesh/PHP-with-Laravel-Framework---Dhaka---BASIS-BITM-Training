<?php include "include/includes.php";   ?>

<section class="py-5">
    <div class="container">
        <div class="row">
                <div class="col-md-5">
                    <img src="assets/image/<?php echo $productDetails['image'] ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <h3><?php echo $productDetails['title'] ?></h3>
                    <p>Prince <?php echo $productDetails['price'] ?> TK</p>
                    <p>Size : <?php echo $productDetails['size'] ?></p>
                    <p>Short Description : <?php echo $productDetails['short_description'] ?></p>
                </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p><?php echo $productDetails['long_description'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer.php";   ?>

