<?php
    include '../conn.php';

	$agent_name=$_POST['agent_name'];	
    $agent_phone=$_POST['agent_phone'];				//post email value from register form
    $agent_email=$_POST['agent_email'];					//post email value from register form
	$agent_profilepic=$_POST['agent_profilepic'];					

$sql="INSERT INTO agent(agent_name,agent_phone,agent_email,agent_profilepic) VALUES ('$agent_name','$agent_phone','$agent_email','$agent_profilepic')";	//insert to user table
$sql1=mysql_query($sql) or die("sql error".$sql);	//run $sql query


?>

<script>
	alert('Record Successfully Insert !');
	location.href="agent_list.php";
</script>