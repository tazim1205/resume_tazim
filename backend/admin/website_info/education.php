<?php
include ('../layouts/header.php');
include ('../layouts/sidebar.php');
?>

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 class="m-b-10">EDUCATION</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="education.php">Education</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Education</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_education.php" class="btn btn-info">View Education</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php 
                                if(isset($_POST['save']))
                                {
                                    $from = $_POST['from'];
                                    $to = $_POST['to'];
                                    $degree = $_POST['degree'];
                                    $description = $_POST['description'];

                                    $db->insert('education',['from'=>$from,'to'=>$to,'degree'=>$degree, 'description'=>$description]);

                                    if($db)
                                    {
                                        echo "<div class='alert alert-success'>Data Insert Successfull</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Data Insert Unsuccessfull</div>";
                                    }

                                }
                                
                                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row col-md-12">
                                        <div class="form-group col-md-6">
                                            <label>From :</label>
                                            <input type="date" name="from" class="form-control datepicker"  required autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>To :</label>
                                            <input type="date" name="to" class="form-control datepicker"  required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Degree :</label>
                                        <input type="text" name="degree" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description :</label>
                                        <textarea name="description" class="form-control summernote"></textarea>
                                    </div>
                                </div>
                                    <div class="form-group col-md-12" style="text-align: center !important;">
                                        <input type="submit" name="save" class="btn btn-primary" value="Insert">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>


<?php
include ('../layouts/footer.php');
?>