<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Switching Pages</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style>
		ul#navlist
		{
		font: bold 11px verdana, arial, sans-serif;
		list-style-type: none;
		padding-bottom: 24px;
		border-bottom: 1px solid #6c6;
		margin: 0;
		}

		ul#navlist li
		{
		float: left;
		height: 21px;
		background-color: #cfc;
		margin: 2px 2px 0 2px;
		border: 1px solid #6c6;
		}

		ul#navlist li#active
		{
		border-bottom: 1px solid #fff;
		background-color: #fff;
		}

		li#active a { color: #000; }

		#navlist a
		{
		float: left;
		display: block;
		color: #666;
		text-decoration: none;
		padding: 4px;
		}

		#navlist a:hover { background: #fff; }
	</style>
	</head>

	<body bgcolor="#99FF66">
	<font color="white" size=8 face="Bodoni MT Black">
	Influencers
	</font><br><br>


	<div id="navcontainer">
		<ul id="navlist">
			<li><a href="index.php?page=1" id="current">Influencer 1</a></li>
			<li><a href="index.php?page=2">Influencer 2</a></li>
			<li><a href="index.php?page=3">Influencer 3</a></li>
			<li><a href="index.php?page=4">Influencer 4</a></li>
			<li><a href="index.php?page=5">Influencer 5</a></li>
		</ul>
	</div>
	<br>

	<?php
		$page = $_GET['page'];
		switch ($page){
		case '1':
			$page_content = 'Alden';
			$page_text = 'Honest Reaction:';
			$srcimage='sampleimages/Alden.jpg';
			break;
		case '2':
			$page_content = 'Coco';
			$page_text = 'Ma am Tapos Na Po';
			$srcimage='sampleimages/Coco.jpg';
			break;
		case '3':
			$page_content = 'Rendon';
			$page_text = 'Pokus kase';
			$srcimage='sampleimages/Rendon.jpg';
			break;
		case '4':
			$page_content = 'Bulalo';
			$page_text = 'Umorder ako yung sinusupsop';
			$srcimage='sampleimages/Bulalo.jpg';
			break;
		case '5':
			$page_content = 'Kalbo';
			$page_text = 'Pano mo Nasabe';
			$srcimage='sampleimages/Kalbo.jpg';
			break;
		default:
			$page_content = 'Legend';
			$page_text = 'Pa check mo sa mama mo';
			$srcimage='sampleimages/Legend.png';
		}

		echo '<h2>' . $page_content . '</h2>';
		echo '<img src="' . $srcimage . '" hspace=10 border=20 align="left">';
		echo '<h3>' . $page_text . '</h3>';
	?>
	</body>
</html>