<?php
	require_once "horse_db_login.php";
	$conn = mysqli_connect($host, $user, $pass, $db, $port);
	if($conn->connect_error) die($conn->connect_error);
	$query = "select breed from horses;";
	$result = mysqli_query($conn, $query);
	echo "<form action = 'Horses.php' method = 'post'>";
		echo "<select name = 'breed'>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<option value = '" . $row[breed] . "'></option>";
		}
		echo "</select> <input type = 'submit' value='Choose a horse to see'> </form>"
?>