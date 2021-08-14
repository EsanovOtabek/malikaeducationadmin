<?
$url=explode('/',$_SERVER['PHP_SELF']);
$uri=$url[2];	
switch ($uri) {
	case 'index.php':
		$pagem=[
			'title'=>"messages",
			'style'=>"<link href=\"assets/css/home.style.css\" rel=\"stylesheet\">"
		];
		break;
	case 'arizalar.php':
		$pagem=[
			'title'=>"messages",
			'style'=>"<link href=\"assets/css/home.style.css\" rel=\"stylesheet\">"
		];
		break;
	case 'login.php':
		$pagem=[
			'title'=>"Login",
			'style'=>"<link href=\"assets/css/login.style.css\" rel=\"stylesheet\">"
		];
		break;
	case 'addpage.php':
		$pagem=[
			'title'=>"Add Page",
			'style'=>"<link href=\"assets/css/home.style.css\" rel=\"stylesheet\">"
		];
		break;
	default:
		$pagem=[
				'title'=>"Home",
				'style'=>"<link href=\"assets/css/home.style.css\" rel=\"stylesheet\">"
			];


}

?>

<!DOCTYPE html>
<html lang="uz">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="LifePC GrouP">
	<title> <?=$pagem['title']?> </title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<?=$pagem['style']?>
</head>