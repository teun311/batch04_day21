<?php include "pages/includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card-header">
                        <h4>Series</h4>
                    </div>

                    <div class="card card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Starting Number</label>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control" name="starting_number" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Ending Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="ending_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select Type</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="type" value="asc">Low to High</label>
                                    <label for=""><input type="radio" name="type" value="desc">High to Low</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <textarea name=""  id="" class="form-control" rows="5"><?php echo  isset($result) ? $result: '' ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-outline-success btn-block" name="btn" value="Check Result">
                                </div>
                            </div>

                        </form>
                  <div/>
            </div>
        </div>
    </section>




<?php include "pages/includes/footer.php"; ?>