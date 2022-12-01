
<?php

session_start();

include("../backend/connection.php");
include("../backend/functions.php");

$user_data = check_login($con);

$s = $_GET['s'];

$query = "SELECT username
	FROM users WHERE username LIKE '" . $s . "%' ORDER BY id DESC LIMIT 5";

if ($result = mysqli_query($con, $query)) {

	if (mysqli_num_rows($result) == 0) {
		echo "<ul style='color:white;'><li>No results to display</li></ul>";
	} else {

		echo "<ul style='color:white;'>";

		while ($user_data = mysqli_fetch_assoc($result)) {
			echo "<li>";
			echo "<span>" . $user_data['username'] . "</span>";
		}

		echo "</ul>";
	}
} else {
	die("Error with the query");
}

mysqli_close($con);

?>
