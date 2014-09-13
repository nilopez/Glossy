<p>Mandame un mensaje</p>

<?php echo form_open("recibirdatos") ?>
<?php 
	$nombre   = array('name' => 'nombre',  'placeholder' => 'Tu nombre');
	$apellido = array('name' => 'apellido','placeholder' => 'Tu apellido');
	$email    = array('name' => 'email',   'placeholder' => 'Tu email');
	$texto    = array('name' => 'texto',   
					  'placeholder' => 'Tu comentario', 
					  'rows' => '15', 'cols' => '50',);
?>
<?php echo form_label('Nombre:','nombre') ?>
<?php echo form_input($nombre) ?>
<br>
<?php echo form_label('Apellido:','apellido') ?>
<?php echo form_input($apellido) ?>
<br>
<?php echo form_label('Email:','email') ?>
<?php echo form_input($email) ?>
<br>
<?php echo form_label('texto:','texto') ?>
<?php echo form_textarea($nombre) ?>
<br>
<?php echo form_submit('','Enviar')?>
<?php echo form_close() ?>


