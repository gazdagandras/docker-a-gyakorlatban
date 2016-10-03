<?php

$con = new mysqli("database","root","nagyontitkos","testdb");

if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = $con->query("SELECT * FROM users");

echo "<h1>Users:</h1>";

echo '<table border="1">';
echo '<tr><th>Username<th>Password<th>Email';
while ($row = $result->fetch_object()) {
  echo "<tr><td>" . $row->username;
  echo "<td>" . $row->password;
  echo "<td>" . $row->email;
}
echo '</table>';

