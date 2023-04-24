<?php include 'includes/header.php' ?>
<?php
if(!isset($_SESSION['auth_id']))
{
    header("Location:action.php?page=login");
}
?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Sum Of Series</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=sum-of-series-result" method="post">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result is :</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="" cols="30" rows="10"><?php echo isset($result) ? $result : ' ' ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Get Result">
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
