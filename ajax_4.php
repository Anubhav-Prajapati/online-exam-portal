<?php
include "config.php";
$quesarr=array();
$id=$_POST['id'];
if($id<16){
$sql = "SELECT * FROM questionset4 where id=".$id;
$res_data = $conn->query($sql);
if($res_data->num_rows>0){
	while($row=$res_data->fetch_assoc()) {
	array_push($quesarr, array('ques'=>$row['ques'],'opt1'=>$row['opt1'],'opt2'=>$row['opt2'],'opt3'=>$row['opt3'],'opt4'=>$row['opt4'],'id'=>$row['id']));

echo json_encode($quesarr);
}
}
}

?>