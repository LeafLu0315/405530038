<?php
	$data=array(
		array("Volvo",22,18),
		array("BWM",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	);
?>
<html>
	<head>
		<style>
			table,th,td{
				border:1px hidden;
				text-align:center;
			}
			td,th{
				width:90px;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				for($i=0;$i<4;$i++){
					echo "<tr>";
					for($j=0;$j<3;$j++)
						echo "<td>".$data[$i][$j]."</td>";
					echo "</tr>";
				}
			?>
		</table><br />
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				foreach($data as $value){
					echo "<tr>";
					foreach($value as $key){
						echo "<td>".$key."</td>";
					}
					echo "</tr>";
				}
			?>
		</table><br />
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				function f($value){
					$res="<tr><td>";
					$res.=$value[0]."</td><td>";
					$res.=$value[1]."</td><td>";
					$res.=$value[2]."</td></tr>";
					echo $res;
				}
				array_map("f", $data);
			?>
		</table>
	</body>
</html>