<?php
//Konfigurasi DB
$hostname = "localhost";
$database = "nurhadi";
$username = "root";
$password = "";
$conn = mysqli_connect($hostname, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Arkademy Test No 7</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Achmad Fatur Rizky</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br><br>
		<div class="container">

			<h3 style="margin-top: 20px;">List Hobbies</h3>
			<table class="table">
				<thead class="table-primary">
					<tr>
						<th>Person_id</th>
						<th>Name</th>
						<th>Person_hobbies</th>
					</tr>
				</thead>
				<tbody>
					<?php
				
				$query = "SELECT persons.id, persons.name AS name, GROUP_CONCAT(hobbies.name) AS person_hobbies
FROM persons, hobbies WHERE hobbies.person_id = persons.id GROUP BY persons.id";
				$sqlcon = $conn->query($query);
				while($read=mysqli_fetch_array($sqlcon)){
				echo '<tr>';
				echo '<td>'.$read['0'].'</td>';
				echo '<td>'.$read['name'].'</td>';
				echo '<td>'.$read['person_hobbies'].'</td>';
				echo '</tr>';
				}
			?>
				</tbody>
			</table>
			
			<hr />
			<p class="text-center">Test Bootcamp Arkademy 2019</p>
		</div>
	</body>
</html>