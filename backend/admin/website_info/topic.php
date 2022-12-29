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
                            <h4 class="m-b-10">TOPIC</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="education.php">Topic</a></li>
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
                                <h5>Topic</h5>
                            </div>
                            <div class="col-6">
                                <div class="links" style="margin-left: 427px;">
                                    <a href="view_topic.php" class="btn btn-info">View Topic</a>
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
                                    $topics = $_POST['topics'];

                                    $db->insert('add_topic',['topics'=>$topics]);

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
                                    <div class="form-group col-md-12">
                                        <label>Topic :</label>
                                        <input type="text" name="topics" class="form-control">
                                    </div>
                                </div>
                                    <div class="form-group col-md-12" style="text-align: center !important;">
                                        <input type="submit" name="save" class="btn btn-primary" value="Insert">
                                    </div>
                            </form>
                        </div>
                    </div>

                    <?php

                    $sql=$db->link->query("SELECT * FROM `add_topic`");
                    if (mysqli_num_rows($sql) > 0) 
                    {
                    	?>
                    <div class="card-body">
                    	<div class="row">
                    		<div class="col-12">
                                <table id="example" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Topic</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	$sql = $db->link->query("SELECT * FROM `add_topic` ORDER BY `id` ASC");
                                    	if($sql)
                                    	{
                                    		$sl = 1;
			                                while ($showdata = $sql->fetch_assoc()) 
			                                {
			                                ?>
			                                <tr>
			                                    <td><?php echo $sl++; ?></td>
			                                    <td><?php echo $showdata['topics']; ?></td>
			                                    <td>
			                                        <a href="edit_topic.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
			                                        <a href="delete_topic.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
			                                    </td>
			                                </tr>
			                                <?php
			                                }
			                            }
			                            ?>
			                        </tbody>
			                    </table>
			                </div>
                    	</div>
                    </div>

                    <?php
                }

                ?>

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