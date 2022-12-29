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
                            <h4 class="m-b-10">VIEW SERVICE</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../layouts/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="view_service.php">View Service</a></li>
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
                            <div class="col-12">
                                <table id="example" class="table">
                                	<thead>
                                		<tr>
                                			<th>Sl</th>
                                			<th>Name</th>
                                			<th>Email</th>
                                			<th>Subject</th>
                                			<th>Review</th>
                                			<th>Action</th>
                            			</tr> 
                        			</thead>
                        			<tbody>
                        				<?php 
	                        			$sql = $db->link->query("SELECT * FROM `review` ORDER BY `id` DESC");
	                        			if($sql)
	                        			{
	                        				$sl = 1;
	                        				while ($showdata = $sql->fetch_array())
	                        			{
	                        				?>
	                        				<tr>
	                        					<td><?php echo $sl++; ?></td>
	                                    		<td><?php echo $showdata['1']; ?></td>
	                                    		<td><?php echo $showdata['2']; ?></td>
	                                    		<td><?php echo $showdata['3']; ?></td>
	                                    		<td>...</td>
	                                    		<!-- <td><i class="fa-solid fa-ellipsis"></td> -->
			                                    <td>
			                                        <a href="delete_review.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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