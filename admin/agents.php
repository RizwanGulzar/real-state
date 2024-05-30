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
                   <h2 class="mb-4"><i class="fa fa-plus"></i> Add Agent</h2></col-4>
                    <div class="col-md-8">
                </div>
                    <form action="./add-agents-qry.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="agents" class="form-control" id="floatingInput" placeholder="Enter Here..">
                                    <label for="floatingInput">Agent Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="file" name="image" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Upload Image</label>
                                </div>
                            </div>
                            </div>
                            <div class="col-4 OFFSET 8  justify-content-end" >  
                        <button class="btn btn-primary  text-white my-2">Add Agent</button>
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