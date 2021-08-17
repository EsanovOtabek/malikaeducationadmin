<?
$url=explode('/',$_SERVER['PHP_SELF']);
$uri=$url[2];

$menu = array('index.php' => "Xabarlar", 'arizalar.php' =>  "Arizalar",'yangiliklar.php' =>  "Postlar",'yangilik.php'=>"Post qo'shish",'rasmlar.php'=>"Galereya",'rasm.php'=>"Rasm qo'shish");
?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse text-white bg-dark pt-5 p-2">
	<div class="position-sticky pt-3">
		<ul class="nav flex-column nav-pills mb-auto">
			<?$str="";
			foreach ($menu as $link => $name) { ($uri==$link)?$str="active":$str=""; ?>
				<li class="nav-item">
					<a class="nav-link text-white <?=$str?>" href="<?=$link?>"><?=$name?></a>
				</li>
			<?}?>			
		</ul>

		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Settings</span>
			<a class="link-secondary" href="#" aria-label="Add a new report">
				<span data-feather="plus-circle"></span>
			</a>
		</h6>
		<ul class="nav flex-column mb-2"><ul class="nav flex-column mb-2">
			<li class="nav-item">
	            <a class="nav-link text-white" href="logout.php">
	              Logout
	        	</a>
	        </li>
		</ul>
		</ul>
	</div>
</nav>
