This code uses the `mysql_*` functions, which are deprecated and removed in PHP 7.0 and later versions.  Using deprecated functions can lead to security vulnerabilities and compatibility issues.

```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('database',$link);
$result = mysql_query("SELECT * FROM table",$link);

while ($row = mysql_fetch_array($result)) {
  echo $row['column'] . "<br>";
}
mysql_close($link);
?>
```