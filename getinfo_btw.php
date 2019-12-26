<?php
include "final_public.php";
include "getlinks.php";

$q_1 = $_REQUEST["q2"];
$q_2 = $_REQUEST["q3"];
$str = $_REQUEST["str"];

if($q_2 == "enzyme"){
	$form="<tr><th>uniqueid</th><th>ecnumber</th><th>name</th><th>enzyme</th></tr>";
}
if($q_2 == "pathway"){
	$form="<tr><th>uniqueid</th><th>name</th><th>synonym</th><th>dblinks</th></tr>";
}
if($q_2 == "reaction"){
	$form="<tr><th>uniqueid</th><th>formula</th><th>types</th><th>dblinks</th></tr>";
}


if($q_1=="pathway" && $q_2=="reaction"){
	$sql_1="SELECT * FROM pathway WHERE name LIKE '%$str%' LIMIT 50";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['id'];
			$sql_2 = "SELECT reaction FROM reactionlist WHERE pathwayid='$que_1'";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['reaction'];
					$sql_3 = "SELECT * FROM reaction WHERE uniqueid='$que_2' ORDER BY dblinks DESC";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE){
						while($row = mysqli_fetch_array($result_3)) {
							echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['formula'] . "</td><td>" . $row['types'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
						}
					}
				}
			}
		}
		echo "</table>";
	}
}

if($q_1=="reaction" && $q_2=="enzyme"){
	$sql_1="SELECT * FROM reaction WHERE formula LIKE '%$str%' LIMIT 100";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['id'];
			$sql_2 = "SELECT enzymaticreaction FROM reactionenzymatic WHERE reactionid='$que_1'";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['enzymaticreaction'];
					$sql_3 = "SELECT * FROM enzyme WHERE uniqueid='$que_2'";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE){
						while($row = mysqli_fetch_array($result_3)) {
							echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['ecnumber'] . "</td><td>" . $row['name'] . "</td><td>" . $row['enzyme'] . "</td></tr>";
						}
					}
				}
			}
		}
		echo "</table>";
	}
}

if($q_1=="enzyme" && $q_2=="reaction"){
	$sql_1="SELECT * FROM enzyme WHERE name LIKE '%$str%' LIMIT 100";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['uniqueid'];
			$sql_2 = "SELECT reactionid FROM reactionenzymatic WHERE enzymaticreaction='$que_1'";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['reactionid'];
					$sql_3 = "SELECT * FROM reaction WHERE id='$que_2' ORDER BY dblinks DESC";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE){
						while($row = mysqli_fetch_array($result_3)) {
							echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['formula'] . "</td><td>" . $row['types'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
						}
					}
				}
			}
		}
		echo "</table>";
	}
}

if($q_1=="reaction" && $q_2=="pathway"){
	$sql_1="SELECT * FROM reaction WHERE formula LIKE '%$str%'";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['uniqueid'];
			$sql_2 = "SELECT pathwayid FROM reactionlist WHERE reaction='$que_1'";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['pathwayid'];
					$sql_3 = "SELECT * FROM pathway WHERE id='$que_2' ORDER BY dblinks DESC";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE && $result_3->num_rows != 0){
						while($row = mysqli_fetch_array($result_3)) {
							echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['synonym'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
						}
					}
				}
			}
		}
		echo "</table>";
	}
}

if($q_1=="pathway" && $q_2=="enzyme"){
	$sql_1="SELECT * FROM pathway WHERE name LIKE '%$str%'";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['id'];
			$sql_2 = "SELECT reaction FROM reactionlist WHERE pathwayid='$que_1' LIMIT 100";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['reaction'];
					$sql_3 = "SELECT * FROM reaction WHERE uniqueid='$que_2' LIMIT 100";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE){
						while($row_2 = mysqli_fetch_array($result_3)) {
							$que_3 = $row_2['id'];
							$sql_4 = "SELECT * FROM reactionenzymatic WHERE reactionid='$que_3' LIMIT 100";
							$result_4 = mysqli_query($conn,$sql_4);
							if($result_4!=FALSE){
								while($row_3 = mysqli_fetch_array($result_4)) {
									$que_4 = $row_3['enzymaticreaction'];
									$sql_5 = "SELECT * FROM enzyme WHERE uniqueid='$que_4'";
									$result_5 = mysqli_query($conn,$sql_5);
									if($result_5!=FALSE){
										while($row = mysqli_fetch_array($result_5)) {
											echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['ecnumber'] . "</td><td>" . $row['name'] . "</td><td>" . $row['enzyme'] . "</td></tr>";
										}
									}
								}
							}
						}
					}
				}
			}
		}
		echo "</table>";
	}
}

if($q_1=="enzyme" && $q_2=="pathway"){
	$sql_1="SELECT * FROM enzyme WHERE name LIKE '%$str%' LIMIT 50";
	$result_1 = mysqli_query($conn,$sql_1);
	if($result_1==FALSE || $result_1->num_rows == 0){
		echo "<b>No query results.</b>";
	}else{
		echo "<table border='1'>";
		echo $form;
		while($ids = mysqli_fetch_array($result_1)) {
			$que_1 = $ids['uniqueid'];
			$sql_2 = "SELECT reactionid FROM reactionenzymatic WHERE enzymaticreaction='$que_1'";
			$result_2 = mysqli_query($conn,$sql_2);
			if($result_2!=FALSE){
				while($row_1 = mysqli_fetch_array($result_2)){
					$que_2 = $row_1['reactionid'];
					$sql_3 = "SELECT * FROM reaction WHERE id='$que_2' LIMIT 50";
					$result_3 = mysqli_query($conn,$sql_3);
					if($result_3!=FALSE){
						while($row_2 = mysqli_fetch_array($result_3)) {
							$que_3 = $row_2['uniqueid'];
							$sql_4 = "SELECT * FROM reactionlist WHERE reaction='$que_3'";
							$result_4 = mysqli_query($conn,$sql_4);
							if($result_4!=FALSE){
								while($row_3 = mysqli_fetch_array($result_4)) {
									$que_4 = $row_3['pathwayid'];
									$sql_5 = "SELECT * FROM pathway WHERE id='$que_4' ORDER BY dblinks DESC";
									$result_5 = mysqli_query($conn,$sql_5);
									if($result_5!=FALSE){
										while($row = mysqli_fetch_array($result_5)) {
											echo "<tr><td>" . $row['uniqueid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['synonym'] . "</td><td>" . links($row['dblinks']) . "</td></tr>";
										}
									}
								}
							}
						}
					}
				}
			}
		}
		echo "</table>";
	}
}
mysqli_close($conn);
?>