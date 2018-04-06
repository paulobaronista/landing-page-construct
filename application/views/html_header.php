<?php echo doctype('html5'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
		$meta = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => $description),
			array('name' => 'keywords', 'content' => $keywords),
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
		);
		echo meta($meta);
		//echo link_tag('assets/images/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag('assets/css/bootstrap.min.css');
		echo link_tag('assets/css/style.css');
		?>
	</head>
<body>