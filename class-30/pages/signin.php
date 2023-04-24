<?php include 'includes/header.php' ?>

<?php
if (isset($_SESSION['id']))
{
    header("Location: action.php?page=home");
}
?>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Sign In</h3>
                            </div>
                            <div class="card-body">
                                <span class="text-danger"><?php echo isset($message) ? $message : '' ?></span>
                                <form action="action.php?page=user-signin" method="post">
                                    <div class="row mt-3">
                                        <label class="col-md-4">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-md-4">Password</label>
                                        <div class="col-md-8">
                                            <input type="text" name="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-md-4"></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success" value="Sign In" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include 'includes/footer.php' ?>
