<?php include "includes/header.php"; ?>


     <section class="py-5">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 mx-auto">
                     <div class="card">
                         <div class="card-header">
                             <h2 class="text-center">Series</h2>
                         </div>
                         <div class="card-body">
                             <form action="action.php?page=series-result" method="post">
                                 <div class="row mt-3">
                                     <label for="" class="col-md-4">First Number :</label>
                                     <div class="col-md-8">
                                         <input type="text" name="first_number" class="form-control" placeholder="Enter First Number">
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     <label for="" class="col-md-4">Last Number :</label>
                                     <div class="col-md-8">
                                         <input type="text" name="last_number" class="form-control" placeholder="Enter Last Number">
                                     </div>
                                 </div>
                                 <div class="row mt-3">
                                     <label for="" class="col-md-4">Result :</label>
                                     <div class="col-md-8">
                                         <textarea class="form-control" name="" id="" cols="42" rows="10"><?php echo isset($result) ? $result: ' '?></textarea>
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


<?php include "includes/footer.php"; ?>

