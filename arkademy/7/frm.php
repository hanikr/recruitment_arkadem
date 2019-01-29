<!DOCTYPE html>
<html>
<head>
	<title>:'(</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<center><h1>Tabel</h1></center>
	<center><table cellspacing='0'>
		<thead>
			<tr>
				<th>Person ID</th>
				<th>Nama</th>
				<th>Person Hobi</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$querytampil = mysqli_query($conn, "SELECT categories.person_id, categories.name, GROUP_CONCAT(hobbies.name) AS person_hobi FROM categories, hobbies WHERE categories.person_id = hobbies.person_id GROUP by person_id, name");
		while($data = mysqli_fetch_assoc($querytampil)){
				?>
		<tbody>
			<tr>
				<td><?php echo $data['person_id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['person_hobi']; ?></td>
			</tr>
		</tbody>
	</table>
</center>
</body>
</html>