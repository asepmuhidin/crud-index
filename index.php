<?php
	session_start();
	$title=!isset($_GET['title'])?'View Data Mahasiswa':$_GET['title'];
	$action=!isset($_GET['action'])?'':$_GET['action'];
	$session=!isset($_SESSION['action'])?'':$_SESSION['action'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
	<link rel="stylesheet" href="assets/fonts-awesome/css/fontawesome-all.min.css" >
  </head>

  <body>
	<div class="container"> 
		<br>
		<div class="card">
			<div class="card-header">
				<?php echo $title;?>
			</div>
		    <div class="card-body">
				<h4 class="card-title"><?php echo $title;?></h4>
				<?php if($session!='') : ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<?php echo $session; ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php endif; ?>
				<?php
					switch ($action){
						case '':include 'showdata.php';break;
						case 'insert':include 'add.php';break;
						case 'edit':include 'edit.php';break;
					}
					$_SESSION['action']='';
				?>
				
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
<script src="assets/js/bootstrap.min.js"></script> 	
</body>
</html>
	