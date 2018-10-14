<?php include "configAdmin.php";?>
<?php
if(!isset($_SESSION['adminName'])){
		header("Location: index.php");
	}
?>
<?php include "adminportal.php";?>
<?php
	$action=$_GET['action'];
					if($action=="edit"){?>
					<?php
					$sql= "SELECT * FROM questionset1 where id=".$_GET['id'];
					$query=$conn->query($sql);
					$numofrow=$query->num_rows;
					if($numofrow>0){
						while($row=$query->fetch_assoc()){
						//	$ques=$row['ques'];
							//$opt1=$row['opt1'];
					
					
							//print_r($row);
						
					?>
					<div style="margin:  0 auto;width:  60%; color:  white;padding: 50px;">
						<h3>Update Product</h3>
					<form action="updatedb.php" method="post">
								<p>
									<label>Question</label><br>
									<textarea id="ques" name="ques" cols="30" rows="10"><?php echo $row['ques'];?></textarea>
								</p>
								
								<p>
									<label>Option 1</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" value="<?php echo $row['opt1'];?>" name="opt1" />
								</p>
								<p>
									<label>Option 2</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" value="<?php echo $row['opt2'];?>" name="opt2" />
								</p>
								
								<p>
									<label>Option 3</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" value="<?php echo $row['opt3'];?>" name="opt3" />
								
								<p>
									<label>Option 4</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" value="<?php echo $row['opt4'];?>" name="opt4" />

								
								</p>
									<p>
									<label>Correct Answer</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" value="<?php echo $row['correctans'];?>" name="correctans" />

									<input type="hidden" value="<?php echo $row['id'];?>" name="editid"></input>
								</p>
								
								
								<p>
									<input class="submit" name="edit" type="submit" value="Edit" />
								</p>

						<?php }}} ?>	
						
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
					</div>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> 
		
	</div></body>
</html>
