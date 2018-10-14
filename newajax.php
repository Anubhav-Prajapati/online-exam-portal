<?php
include "config.php";
	$action=$_POST['action'];
	if($action=="final"){
	$selectedval=json_decode($_POST['data']);

	$count=0;
	for($i=1;$i<=15;$i++) {

        $sql = "SELECT * FROM questionset1 where id=" . $i;
        $res_data = $conn->query($sql);
        if ($res_data->num_rows > 0) {
            while ($row = $res_data->fetch_assoc()) {
                if ($row['correctans'] == $selectedval[$i]) {
                    $count++;

                }
            }
        }
    }
}
	echo json_encode($count);
	?>