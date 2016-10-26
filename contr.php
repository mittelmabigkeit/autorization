<meta charset="Utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 26.10.2016
 * Time: 14:34
*/

$l = $_REQUEST['login'];
$p = $_REQUEST['password'];

$host='localhost';
$dbname='bd_sec';
$user='root';
$password='';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");

$st = $db->query('SELECT password,login FROM sec');
foreach ($st->fetchAll() as $row) {
//    print "{$row['password']} <br/>\n";
    $pp = $row['password'];
//    print "{$row['login']} <br/>\n";
}

//$sql = 'SELECT * FROM  sec';
//$result = $pdo->query($sql);
//
//
//foreach ($result as $row) {
//    print $row['password'] . "\t";
//    print $row['login'] . "\t";
//}

//$result = $pdo->query($sql);
//print_r ($result);
//echo $result;
//var_dump ($result);
//foreach ($result as $row) {
//    echo $row['password'];
//}

//while ($row = $result->fetch()) {
//    $pp[] = $row['password'];
//}
//for( $i=0;$i<10;$i++)
// echo $pp[$i];

if ($pp == $p)
   require_once "index.php";
else {
    echo "доступ запрещен";
    require_once "forma.php";
};

?>


