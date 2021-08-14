<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}

require_once 'app/controllers.php';
$id=intval($_GET['id']);
$method=$_GET['method'];
$delet=new Delet($method,$id);

header("location:index.php");
?>

