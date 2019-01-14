<?php
	require_once "horse_db_login.php";
	$conn = mysqli_connect($host, $user, $pass, $db, $port);
	if($conn->connect_error) die($conn->connect_error);
	$query = "select name from Breeds;";
	$result = mysqli_query($conn, $query);
?>
	<form action = 'Horses.php' method = 'post'>"
		<select name = 'breed'>"
<?php
while ($row = mysqli_fetch_assoc($result)) 
{ 
	echo "<option value = '" . $row["name"] ."'>" . $row["name"] . "</option>";
}
?>			
		</select> 
		<input type = 'submit' value='Choose a horse to see'> 
	</form>