<?php
//development server
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME', 'shopping');

//remote db connection
define('DB_SERVER','remotemysql.com');
define('DB_USER','6nQO1o7m4f');
define('DB_PASS' ,'oQyLE2mg1e');
define('DB_NAME', '6nQO1o7m4f');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>