<?php
	include "config.php";
?>
<?php
	if(!isset($_SESSION['username'])){
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylesignup.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div id='nav'>
<ul>

  <li><a href="examportal.php">Select Question Set</a></li>
  <!-- <li><a href="#contact"></a></li> -->
  <li><a href="logout.php">Logout</a></li>
  <li  style="float:right"><p style="color: white"><?php	echo "Welcome: " .$_SESSION['username'];?>&nbsp;&nbsp;&nbsp;</p></li>
</ul>
	<!-- <a href="logout.php"><input id="logout" type="button" name="logout" value="Logout" ></input></a> -->
</div>>
<div id="main" style="color: white; padding: 100px 0; width: 60%; margin:  0 auto;">
		<div id="sub" style=" padding: 50px;text-align: center;">
	
			<form id="exam">
			<input type="button" id="startbtn" class="Startbtn1" value="Start Quiz" data-id="1" style=" background-color: #000080;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;" />
			</form>
			<p id="demo"></p>
			
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('#startbtn').click(function(){
	$id=$(this).data('id');
	$.ajax({
	    url:"ajax_2.php",
	    method:"POST",
	    data:{id:$id},
	    dataType: "json"        
	}).done(function(data){
	    
		var datalen=Object.keys(data).length;
		var formtable="";	

		for (var i=0; i<datalen; i++){
			formtable+="<table id=\"main\" style=\"text-align: left;\"><tr><th><p>QUES "+data[i].id+":"+data[i].ques+"</p></th></tr><tr><td><input type=\"radio\" class=\"option\" value=\"A\">"+data[i].opt1+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"B\">"+data[i].opt2+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"C\">"+data[i].opt3+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"D\">"+data[i].opt4+"</input></td></tr>";

		formtable+="</table>";
		
		var form="<input type=\"button\" value=\"Next\" id=\"nextbtn\" name=\"next\" onclick=\"myFunction('"+data[i].id+"')\" data-nxtid="+data[i].id+" class=\"nxtbutton\" style=\" background-color: #000080; border: none;    color: white;    padding: 15px 32px;    text-align: center;    text-decoration: none;    display: inline-block;    font-size: 16px;    margin: 4px 2px;    cursor: pointer;\"></input>";
	}
		$('#exam').html(formtable);
		$('#demo').html(form);
	});
});
});

var data=new Array();

function myFunction(idq){
	var ans=$('#main input:radio:checked').val();
	data[idq]=ans;
	var myJSON = JSON.stringify(data); 
	idq++;
	if(idq<16){
	var $id=idq;

	$.ajax({
	    url:"ajax_2.php",	
	    method:"POST",
	    data:{id:$id},
	    dataType: "json"        
	}).done(function(data){
	  // alert(data);

	    console.log(data);
		var datalen=Object.keys(data).length;
		var formtable="";	
		for (var i=0; i<datalen; i++){
			formtable+="<table id=\"main\" style=\"text-align: left;\"><tr><th><p>QUES "+data[i].id+":"+data[i].ques+"</p></th></tr><tr><td><input type=\"radio\" class=\"option\" value=\"A\">"+data[i].opt1+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"B\">"+data[i].opt2+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"C\">"+data[i].opt3+"</input></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"D\">"+data[i].opt4+"</input></td></tr>";
		
		formtable+="</table>";
		var form="<input type=\"button\" value=\"Next\" id=\"nextbtn\" name=\"next\" onclick=\"myFunction('"+data[i].id+"')\" data-nxtid="+data[i].id+" class=\"nxtbutton\" style=\" background-color: #000080; border: none;    color: white;    padding: 15px 32px;    text-align: center;    text-decoration: none;    display: inline-block;    font-size: 16px;    margin: 4px 2px;    cursor: pointer;\"></input>";
		}

				document.getElementById('exam').innerHTML=formtable;
				document.getElementById('demo').innerHTML=form;
				
	});
}
else{
	$.ajax({
	    url:"newajax_2.php",	
	    method:"POST",
	    data:{data:myJSON,id:16,action:"final"},
	    dataType: "json"        
	}).done(function(data){
		console.log(data);
		var abc=JSON.parse(data);
		alert("You have done "+abc+"/15 questions correct.");
	    window.location.href = "examportal.php";
	    
});
}
}

</script>









</body>
</html>