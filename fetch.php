<?
session_start();
ob_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}
if(isset($_POST['method'])){
	require_once 'app/controllers.php';
	$method=$_POST['method'];
	if (empty($_POST['slider'])) {
		$_POST['slider']=0;
	}

	if(intval($_POST['edit_id'])>0){
		$edit=new Edit();
		if(method_exists($edit,$method)){
			if ($edit->$method($_POST,$_FILES['rasm'])) {
				echo("<script>alert(\"O'zgarishlar saqlandi.\")</script>");
			}else{
				echo("<script>alert(\"Xatolik.\")</script>");
			}
		}else 	echo("<script>alert(\"Xatolik\")</script>"); 
	}
	else{
		$insert=new Insert();
		if(method_exists($insert,$method)){
			if ($insert->$method($_POST,$_FILES['rasm'])) {
				echo("<script>alert(\"$method ga qo'shildi\")</script>");
			}else{
				echo("<script>alert(\"Xatolik..\")</script>");
			}
		}else 	echo("<script>alert(\"Xatolik\")</script>"); 
	}
}

switch ($method) {
	case 'news':
		print("<script>location.href=('yangiliklar.php')</script>");
		break;
	
	case 'galereya':
		print("<script>location.href=('rasmlar.php')</script>");
		break;
	
	default:
		print("<script>location.href=('index.php')</script>");
		break;
}
?>
