<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Sign In</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=user-singIn" method="post">
                            <div class="row mt-3">
                                <label for=""   class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for=""   class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for=""   class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="button" name="btn" class="btn btn-success" value="Sing In">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
