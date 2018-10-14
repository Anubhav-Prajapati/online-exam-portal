<?php include "configAdmin.php";?>
<?php include "adminportal.php";?>
					
					<div class="clear"></div>
					
					
				<div class="content-box-content" style="padding: 115px;margin:  0 auto; width: 79%;
">
					
					<div class="tab-content default-tab" id="tab1"> 
						<table style="color: white;">
							
							<thead>
								<tr>
								   <th>S. No.</th>
								   <th>Question</th>
								   <th>Option 1</th>
								   <th>Option 2</th>
								   <th>Option 3</th>
								   <th>Option 4</th>
								   <th>Correct Answer</th>
								   <th>Action</th>
							
								</tr>
								
							</thead>
						 <form action="function.php" method="post">
						
							<tbody><?php

									        if (isset($_GET['pageno'])) {
									            $pageno = $_GET['pageno'];
									        } else {
									            $pageno = 1;
									        }
									        $no_of_records_per_page = 15;
									        $offset = ($pageno-1) * $no_of_records_per_page;


									        $total_pages_sql = "SELECT COUNT(*) FROM questionset1";

									        $result = $conn->query($total_pages_sql);
									        $total_rows = mysqli_fetch_array($result)[0];
									        //print_r($total_rows);

									        $total_pages = ceil($total_rows / $no_of_records_per_page);

									        $sql = "SELECT * FROM questionset1 LIMIT ".$offset.',' .$no_of_records_per_page;

									        $res_data = $conn->query($sql);
									        
									   
							 if($res_data->num_rows>0){
								while($row=$res_data->fetch_assoc()) {?>
										<td ><?php echo $row['id']."."; ?></td>
										<td ><?php echo $row['ques']; ?></td>
										<td><?php echo $row['opt1']; ?></td>
										<td><?php echo $row['opt2']; ?></td>
										<td><?php echo $row['opt3']; ?></td>
										<td><?php echo $row['opt4']; ?></td>
										<td><?php echo $row['correctans']; ?></td>
										
						
									<td>
										<!-- Icons -->
										<a href="UpdateQues.php?id=<?php echo $row['id'];?>&action=edit" title="Edit" style="text-decoration: none; color: white">Edit</a>
										&nbsp;&nbsp;&nbsp;
										<a onclick="return confirm('Are you sure want to delete this item ?');" href="function.php?id=<?php echo $row['id'];?>&action=delete"  title="Delete" style="text-decoration: none; color: white">Delete</a>	
									</td></tr>
									
													
							<?php }}?>
						</tbody>
						</form>
						</table>
						</div>
						</div>
</body>
</html>
