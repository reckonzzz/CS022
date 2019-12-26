<?php
include "final_public.php";
include "getlinks.php";

$q = $_REQUEST["q1"];
$str = $_REQUEST["str"];

if($q == "enzyme"){
	$sql_1="SELECT * FROM enzyme WHERE name LIKE '%$str%'";
	$form="<tr><th>uniqueid</th><th>ecnumber</th><th>name</th><th>enzyme</th></tr>";
}
if($q == "pathway"){
	$sql_1="SELECT * FROM pathway WHERE name LIKE '%$str%' ORDER BY dblinks DESC";
	$form="<tr><th>uniqueid</th><th>name</th><th>synonym</th><th>dblinks</th></tr>";
}
if($q == "reaction"){
	$sql_1="SELECT * FROM reaction WHERE formula LIKE '%$str%' ORDER BY dblinks DESC";
	$form="<tr><th>uniqueid</th><th>formula</th><th>types</th><th>dblinks</th></tr>";
}


$result_1 = mysqli_query($conn,$sql_1);

if($result_1==FALSE || $result_1->num_rows == 0){
	echo "<b>No query results.</b>";
}else{
	echo "<table border='1'>";
	echo $form;
	while($row = mysqli_fetch_array($result_1)) {
		if($q == "enzyme"){
			echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['ecnumber'] . "</td><td>" . $row['name'] . "</td><td>" . $row['enzyme'] . "</td></tr>";
		}
		if($q == "pathway"){
			echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['synonym'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
		}
		if($q == "reaction"){
			echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['formula'] . "</td><td>" . $row['types'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
		}
	}
	echo "</table>";
}
mysqli_close($conn);
?>