<!DOCTYPE HTML>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<title>Vitrofusion</title>

	<?php echo add_jscript('jquery.min'); ?>
	<?php echo add_jscript('bootstrap.min'); ?>
	<?php echo add_jscript('app'); ?>

	<?php echo add_style('bootstrap.min'); ?>
	<?php echo add_style('styles'); ?>

</head>
	
<body>
	<div id="header">header</div>

	<div>
		<div id="logo">Logo</div>
		<div>
			<?php echo anchor('home', 'Inicio', 'class="boton"'); ?>
			<?php echo anchor('blog', 'Blog', 'class="boton"'); ?>
			<?php echo anchor('products', 'Productos', 'class="boton"'); ?>
			<?php echo anchor('contact', 'Contacto', 'class="boton"'); ?>
		</div>
	</div>

	<div id="main_title"><h1><?=$title;?></h1></div>

	<div>
		<?php $this->load->view($view); ?>
	</div>

	<div>Footer</div>
</body>
</html>