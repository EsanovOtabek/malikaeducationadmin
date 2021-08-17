<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}

$id=intval($_GET['edit']);
if($id>0){
	require_once 'app/controllers.php';
	$find=new Find; 
	$n=$find->id("galereya",$id);
	$rasm=[];
	foreach ($n as $key => $value) {
		$rasm[$key]=htmlspecialchars_decode($value,ENT_COMPAT);
	}
}

?>

<? include_once 'pages/head.php'; ?>

<body>

	<? include_once 'pages/header.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<?include_once 'pages/sidebar.php'; ?>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<hr>
				<h2><?=($id>0)? "Postni tahririlash": "Post qo'shish"?></h2>

				<form class="needs-validation" action="fetch.php" method="POST" enctype="multipart/form-data">

					<div class="row g-3">
						<div class="row gy-3">
							<div class="col-md-12">
								<label for="name" class="form-label ">Nomi</label>
								<input type="text" name="name" class="form-control form-control-lg" id="cc-name" placeholder="name" required value="<?=$rasm['name']?>">

								<input type="text" name="method" value="galereya" hidden>
					            <input type="text" name="edit_id" value="<?=$rasm['id']?>" hidden>

								<div class="invalid-feedback">
									Name is required
								</div>
							</div>
							
						<div class="row gy-3">
							<div class="col-md-12">
								<label for="file-name" class="form-label ">Rasm yuklash</label>
								<input type="file" name="rasm" class="form-control form-control-lg" id="file-name"  value="<?=$rasm['rasm']?>">
								<div class="invalid-feedback">
									File is required
								</div>
							</div>
						</div>
						
						<hr class="my-4">

					</div>

					<button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
				</form>
			</main>
		</div>
	</div>


	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>