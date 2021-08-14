<?php 
require_once 'config.php';

function messages(){
	$sql="SELECT * FROM `messages` ORDER BY id DESC";
	$res=mysqli_query($GLOBALS['db'],$sql); $i=1;?>
	<div class="table-responsive">
		<table id="example" class="table table-striped data-table" style="width: 100%">
			<thead>
				<tr>
					<th>id</th>
					<th>Ismi</th>
					<th>Familiyasi</th>
					<th>Telefon</th>
					<th>Email</th>
					<th>Xabar matni</th>
					<th>Xabar_vaqti</th>
					<th>O'chirish</th>
				</tr>
			</thead>
			<tbody>
				<?while ($row=mysqli_fetch_array($res)) {?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row['name']?></td>
						<td><?=$row['fam']?></td>
						<td><?=$row['tel']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['xabar']?></td>
						<td><?=$row['vaqt']?></td>
						<td>
							<a href="" onclick="delet(<?=$row['id']?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<? } ?>
			</tbody>
		</table>
	</div>

<?}
function arizalar(){
	$sql="SELECT * FROM `ariza` ORDER BY id DESC";
	$res=mysqli_query($GLOBALS['db'],$sql); $i=1;?>
	<div class="table-responsive">
		<table id="example" class="table table-striped data-table" style="width: 100%">
			<thead>
				<tr>
					<th>id</th>
					<th>Vasiy:</th>
					<th>O'quvchi:</th>
					<th>Telefon:</th>
					<th>Manzil:</th>
					<th>Sinf:</th>
					<th>Vaqt:</th>
					<th>Pdf</th>
					<th>Files</th>
					<th><i class="fa fa-trash"></i></th>
				</tr>
			</thead>
			<tbody>
				<?while ($row=mysqli_fetch_array($res)) {?>
					<tr>
						<td><?=$i++?></td>
						<td><?=$row['fiov']?></td>
						<td><?=$row['fioa']?></td>
						<td><?=$row['tel1']?><br><?=$row['tel2']?></td>
						<td><?=$row['adress']?></td>
						<td><?=$row['sinf']?></td>
						<td><?=$row['vaqt']?></td>
						<td>
							<a class="" href="../arizalar/ariza/<?=$row['pathname']?>/ariza.pdf">
								<img src="../arizalar/ariza/qrcode/<?=$row['pathname']?>.png" width='32'>
							</a>
						</td>
						<td>
							<a class="btn btn-dark" href="../arizalar/ariza/zip/<?=$row['pathname']?>.zip"><i class="fa fa-download"></i></a>
						</td>
						<td>
							<a href="" onclick="delet(<?=$row['id']?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<? } ?>
			</tbody>
		</table>
	</div>

<?}

function yangiliklar(){
	$sqladd="";
	$tag=$_GET['tag'];
	if(strlen($tag)>0){
		$sqladd=" WHERE tur='$tag'";
	}

	$sql="SELECT * FROM `news` ".$sqladd." ORDER BY id DESC";
	$res=mysqli_query($GLOBALS['db'],$sql); $i=1;?>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?while ($row=mysqli_fetch_array($res)) {?>
				<div class="col">
					<div class="card shadow-sm">
						<img src="images/<?=$row['rasm']?>">
						<div class="card-body">
							<p class="card-text"><h5><?=$row['title']?>  <a class="btn btn-outline-secondary" href="yangiliklar.php?tag=<?=$row['tur']?>">#<?=$row['tur']?></a></h5></p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="../news1.php?id=<?=$row['id']?>" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a>
									<a href="yangilik.php?edit=<?=$row['id']?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
									<a href="" onclick="delet(<?=$row['id']?>)"  class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
								</div>
								<h6 class="text-muted"> <?=$row['vaqt']?></h6>
							</div>
						</div>
					</div>
				</div>

			<? } ?>
		</div>

<?}

 