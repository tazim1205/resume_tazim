<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 class="m-b-10">PROFILE INFORMATION</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="profile_information.php">Profile Information</a></li>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-section">
                                
                                <?php
                                if(isset($_POST['save']))
                                {
                                    $title = $_POST['title'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $facebook = $_POST['facebook'];
                                    $twitter = $_POST['twitter'];
                                    $instagram = $_POST['instagram'];
                                    $discord = $_POST['discord'];
                                    $linkedin = $_POST['linkedin'];
                                    $address = $_POST['address'];
                    
                                    $db->update('profile_information',['title'=>$title,'email'=>$email,'phone'=>$phone,'facebook'=>$facebook,'twitter'=>$twitter,'instagram'=>$instagram,'discord'=>$discord,'facebook'=>$facebook,'linkedin'=>$linkedin,'address'=>$address],"id='1'");
                                    if($db->result)
                                    {
                                        echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                                    }
                    
                                    $file = $_FILES['logo']['name'];
                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `profile_information` WHERE `id`=1 ");
                                        $fetch_image = $pathImage->fetch_assoc();
                        
                                        $path = '../../asset/img/profile_information/'.$fetch_image['image'];
                                        if(file_exists($path))
                                        {
                                            unlink($path);
                                        }
                                    }
                                    if($file)
                                    {
                                        $path_info = $_FILES['logo']['name'];

                                        $extension = pathinfo($path_info, PATHINFO_EXTENSION);

                                        $image_name = rand().'.'.$extension;

                                        $path = '../../asset/img/profile_information/'.$image_name;

                                        move_uploaded_file($_FILES['logo']['tmp_name'],$path);
                                        $db->link->query("UPDATE `profile_information` SET `image`='$image_name' WHERE `id`=1");
                                    }
                                }
                  
                                $data= $db->link->query("SELECT * FROM `profile_information` WHERE `id`=1");
                                if($data)
                                {
                                    $showdata = $data->fetch_assoc();
                                }
                                ?>
                                
                                <form class="contact-form mt-5" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-12 text-center">
                                            <label>Logo</label>
                                            <input type="file" name="logo">
                                            <?php
                                            $path = '../../asset/img/profile_information/'.$showdata['image'];
                                            if(file_exists($path))
                                            {
                                                ?>
                                                <img src="../../asset/img/profile_information/<?php echo $showdata['image']; ?>" height="150px">
                                        <?php
                                            }
                                        ?>
                                    </div>
                        
                                    <div class="form-group col-md-6">
                                        <label>Title :</label>
                                        <input type="text" name="title" class="form-control" value="<?php echo $showdata['title'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email Address :</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $showdata['email'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone :</label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo $showdata['phone'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Facebook :</label>
                                        <input type="text" name="facebook" class="form-control" value="<?php echo $showdata['facebook'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Twitter :</label>
                                        <input type="text" name="twitter" class="form-control" value="<?php echo $showdata['twitter'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Instagram :</label>
                                        <input type="text" name="instagram" class="form-control" value="<?php echo $showdata['instagram'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Discord :</label>
                                        <input type="text" name="discord" class="form-control" value="<?php echo $showdata['discord'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Linkedin :</label>
                                        <input type="text" name="linkedin" class="form-control" value="<?php echo $showdata['linkedin'];?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Address :</label> 
                                        <textarea name="address" id="" class="form-control summernote"><?php echo $showdata['address'];?></textarea>
                                    </div>
                                </div>
                                    <div class="form-group" style="text-align: center !important;">
                                        <input type="submit" name="save" class="btn btn-primary" value="Update">
                                    </div>
                                </form>
                            </div>
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
<?php include('../layouts/footer.php'); ?>