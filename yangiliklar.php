<?
session_start();
if($_SESSION['user']!="admin"){
	header("location:login.php");
}
$tags=[
	"yangilik"=>"Yangilik" ,
	"elon"=>"E'lon" ,
	"vakansiya"=>"Vakansiya" ,
	"aksiya"=>"Aksiya" ,
];
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
						<h1 class="fw-light">Taglar </h1>
						<p>
							<?foreach ($tags as $taglink => $tagname) {?>
								<a href="yangiliklar.php?tag=<?=$taglink?>" class="btn btn-primary my-2"><?=$tagname?></a>
							<?}?>
						</p>
					</div>
				</div>
			</section>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<h2>Postlar - <?=$tag?></h2>

				<div class="row">
					<div class="col-md-12 mb-3">
						<div class="card">
							<div class="card-header">
								<a href="yangilik.php" class="btn btn-success btn-lg">+ Post qo'shish</a>

							</div>
							<div class="card-body">
								<!-- messages -->
								<? yangiliklar(); ?>
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
			if(confirm("Postni o'chirmoqchimisiz?")){
				var uri="delet.php?method=news&id="+id;
				location.href=uri;
				alert("Post o'chirildi!");
			}
		}

	</script>

	<? include_once 'pages/script.php'; ?>
	
</body>
</html>