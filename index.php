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

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<h2>Kelgan xabarlar</h2>
				<div class="row">
					<div class="col-md-12">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mb-3">
						<div class="card">
							<div class="card-header">
								<span><i class="bi bi-table me-2"></i></span> Xabarlar
							</div>
							<div class="card-body">
								<!-- messages -->
								<? messages(); ?>
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
			if(confirm("Xabarni o'chirmoqchimisiz?")){
				var uri="delet.php?method=message&id="+id;
				location.href=uri;
				alert("Xabar o'chirildi!");
			}
		}

	</script>

	<? include_once 'pages/script.php'; ?>
	
</body>
</html>