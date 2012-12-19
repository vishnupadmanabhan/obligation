<?php 

require 'functions.php'; 

$conn = connect($config);
if ($conn)
{	
	$users = get('users', $conn);	

} else die("Could not connect to the database");

?>

<!doctype html>
<html lang="en">
	<head>
		<title>Blahg</title>
	</head>
	<body>
		<?php 
		if($users){
			foreach ($users as $user) {
				echo"<li>{$user['name']}</li>";
			}

		} else {
			echo "No rows returned";
		}
		?>
	</body>
</html>