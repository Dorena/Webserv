<?php



DEFINE('DB_USER','root');
DEFINE('DB_HOST','localhost');
DEFINE('DB_PASSWORD','dank');
DEFINE('DB_DATABASE','intro');
		
 		
$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

require_once('../mysql.php')

$query ='Select * from cities WHERE Population >=5000000 order by Population DESC';


$result = mysql_query($dbc, $query);

echo '<tabel border="solid">';
while($row = mysql_fetch_array($result)){

	echo '<tr><td>' . ucfirst($row['City']) . '  </td> <td> ' . $row ['Population'] . '</td></td>';
}

echo '</table>';

?>