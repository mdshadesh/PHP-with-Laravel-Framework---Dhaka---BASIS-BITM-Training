<?php include 'include/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product)   { ?>
                        <div class="col-md-4 mt-3">
                            <div class="card">
                                <img src="assets/images/ <?php echo $product['image']   ?>" alt="" class="card-img-top" style="height: 300px">
                                <div class="card-body">
                                    <h3><?php echo $product['name']   ?></h3>
                                    <p>Price : <?php echo $product['price']   ?> TK</p>
                                    <p>Size : <?php echo $product['size']   ?></p>

                                    <a href="" class="btn btn-success w-100">View</a>
                                </div>
                            </div>
                        </div>
                <?php  }   ?>
            </div>
        </div>
    </section>

<?php include "include/footer.php";  ?>