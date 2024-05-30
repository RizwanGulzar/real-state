<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>

    <?php require_once("./includes/links.php") ?>
</head>

<body>
    <?php require_once("./includes/sidebar.php") ?>

    <?php require_once("./includes/navbar.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-sm-12 col-xl-12 m-0">
                <div class="bg-light rounded h-100 p-4">
                   <col-4>
                   <h2 class="mb-4"><i class="fa fa-plus"></i> Add Listing</h2></col-4>
                    <div class="col-md-8">
                    <?php

                    if (!empty($_SESSION['success'])) {
                        $msg = $_SESSION['success'];
                        echo " <div class='alert alert-success alert-dismissible fade show credErr'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button> <strong>Congratulation! </strong> $msg</div>";
                    }
                    unset($_SESSION['success']);


                    if (!empty($_SESSION['error'])) {
                        $msg = $_SESSION['error'];
                        echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button> <strong>Warning! </strong> $msg</div>";
                    }
                    unset($_SESSION['error']);

                    if (!empty($_SESSION['imgErr'])) {
                        $msg = $_SESSION['imgErr'];
                        echo " <div class='alert alert-danger alert-dismissible fade show credErr'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                            </button> <strong>Warning! </strong> $msg</div>";
                    }
                    unset($_SESSION['imgErr']);

                    ?>
                </div>
                    <form action="./add-listing-qry.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" name="list" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">service Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" name="feature" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">feature Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" name="price" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">price</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="address" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">feature Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="file" name="image" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Upload Image</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                                    <label for="floatingTextarea">Description</label>
                                </div>

                            </div>
                            <div class="col-4 OFFSET 8  justify-content-end" >  
                        <button class="btn btn-primary  text-white my-2">Add service</button>
                        </div>
                        </div>
                     
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once("./includes/js-library.php") ?>


</body>

</html>