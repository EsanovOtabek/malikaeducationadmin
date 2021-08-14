<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}

$id=intval($_GET['edit']);
if($id>0){
	require_once 'app/controllers.php';
	$find=new Find; 
	$n=$find->id("news",$id);
	$new=[];
	foreach ($n as $key => $value) {
		$new[$key]=htmlspecialchars_decode($value,ENT_COMPAT);
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
							<div class="col-md-6">
								<label for="name" class="form-label ">Name</label>
								<input type="text" name="name" class="form-control form-control-lg" id="cc-name" placeholder="name" required value="<?=$new['name']?>">
								<div class="invalid-feedback">
									Name is required
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
								<label for="btn_link" class="form-label">Button link</label>
						         <input type="text" name="btn_link" class="form-control form-control-lg"  placeholder="Button link" required value="<?=$new['ilova']?>">
						        </div>
							</div>

							<div class="col-12">
								<label for="title" class="form-label ">Title</label>
								<div class="input-group has-validation">
									<input type="text" class="form-control form-control-lg" name="title" placeholder="Title" required value="<?=$new['title']?>">
									<div class="invalid-feedback">
										Title is required.
									</div>
								</div>
							</div>

							<div class="col-12">
								<label for="content" class="form-label ">Content <span class="text-muted">(Optional)</span></label>
								<textarea class="form-control form-control-lg" rows="6" name="content" placeholder="Content"><?=$new['text']?></textarea>
							</div>
						</div>

						<div class="row gy-3">
							<div class="col-md-6">
								<label for="file-name" class="form-label ">Rasm</label>
								<input type="file" name="rasm" class="form-control form-control-lg" id="file-name"  value="<?=$new['rasm']?>">
								<div class="invalid-feedback">
									File is required
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
								<label for="tur" class="form-label">Post turi</label>

						          <select name="tur" id="turselect" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
						            <option selected value="yangilik">yangilik</option>
						            <option value="elon">elon</option>
						            <option value="aksiya">aksiya</option>
						            <option value="vakansiya">vakansiya</option>
						          </select>
						        </div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-check"><br>
					            <input type="checkbox" name="slider" class="form-check-input form-check-input" id="exampleCheck1" value="1">
					            <label class="form-check-label" for="exampleCheck1">Ma'lumot sliderda ko'rinsin</label>
					            <input type="text" name="method" value="news" hidden>
					            <input type="text" name="edit_id" value="<?=$new['id']?>" hidden>
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
	<script type="text/javascript">document.getElementById("turselect").value = "<?=$new['tur']?>"</script>
</body>
</html>