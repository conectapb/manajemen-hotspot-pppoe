<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" xml:lang="id">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CyberCity Networks</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/navi.css" media="screen" />

<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>

</head>

<body>

<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Selamat datang, <strong><?php echo ($_SESSION['nama']);?></strong> [ <a href="?page=logout">Logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
				<?php 
				$jam=date("H:i:s");
				$tgl=tgl_indo(date("Y m d"));
				echo "<p><strong>$hari_ini, $tgl, $jam </strong>WIB</p>";
				?>
				</div>
			</div>
		</div>
		<?php include "menu-atas.php"; ?>
	</div>
	
	<div id="content">
	<?php include "menu-nav.php"; ?>
	<div id="main">