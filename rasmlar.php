<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}

include_once 'app/select.php';
?>

<? include_once 'pages/head.php'; ?>

<body>

	<? include_once 'pages/header.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<?include_once 'pages/sidebar.php'; ?>

			<section class=" text-center container">
				<div class="row py-lg-3">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">Galereya </h1>
					</div>
				</div>
			</section>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<h2>Rasmlar</h2>

				<div class="row">
					<div class="col-md-12 mb-3">
						<div class="card">
							<div class="card-header">
								<a href="rasm.php" class="btn btn-success btn-lg">+ Rasm qo'shish</a>

							</div>
							<div class="card-body">
								<!-- messages -->
								<? rasmlar(); ?>
							</div>
						</div>
					</div>
				</div>

				<? include_once 'pages/footer.php'; ?>
			</main>
		</div>
	</div>

	<script type="text/javascript">

		function delet(id) {
			if(confirm("Rasmni o'chirmoqchimisiz?")){
				var uri="delet.php?method=galereya&id="+id;
				location.href=uri;
				alert("Rasm o'chirildi!");
			}
		}

	</script>

	<? include_once 'pages/script.php'; ?>
	
</body>
</html>