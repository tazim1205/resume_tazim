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
                            <h4 class="m-b-10">PORTFOLIO</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
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
                                <h5>Portfolio</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_portfolio.php" class="btn btn-info">View Portfolio</a>
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
				                    $project_name = $_POST['project_name'];
				                    $topic = $_POST['topic'];
				                    $url = $_POST['url'];

				                    $db->insert('portfolio',['project_name'=>$project_name,'topic'=>$topic, 'url'=>$url]);

				                    $file = $_FILES['image']['name'];
				                    
				                    if($file)
				                    {
				                        $id = $db->link->insert_id;
				                        $extension = pathinfo($file, PATHINFO_EXTENSION);

				                        $image_name = rand().'.'.$extension;

				                        $image_path = '../../asset/img/portfolio/'.$image_name;

				                        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

				                        $db->update('portfolio',['image'=>$image_name],"id='$id'");

				                    }

				                }
				                ?>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label>Project Name :</label>
                                        <input type="text" name="project_name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Topic :</label>
                                        <select name="topic" class="form-control select2">
                                            <option>Select One</option>
                                            <?php
                                            $topic = $db->link->query("SELECT * FROM `add_topic`");
                                            if($topic)
                                            {
                                                while($showtopic = $topic->fetch_assoc())
                                                {
                                                    ?>
                                                    <option value="<?php echo $showtopic['id']; ?>"><?php echo $showtopic['topic']; ?></option>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Url :</label>
                                        <input type="text" name="url" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Picture</label>
                                        <input type="file" class="form-control" name="image">
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