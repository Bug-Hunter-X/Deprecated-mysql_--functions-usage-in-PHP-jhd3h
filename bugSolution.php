The solution involves migrating to either the MySQLi or PDO extensions for database interaction.  MySQLi offers procedural and object-oriented interfaces, while PDO provides a database-agnostic approach. Here's an example using MySQLi:

```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');
if ($mysqli->connect_errno) {
  die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
$result = $mysqli->query("SELECT * FROM table");
if ($result) {
  while ($row = $result->fetch_assoc()) {
    echo $row['column'] . "<br>";
  }
  $result->free_result();
}
$mysqli->close();
?>
```

Remember to install the required MySQLi extension if it's not already enabled on your server.