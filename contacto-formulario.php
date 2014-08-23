<article class="fluid-container formulario">
	<form id="formularioDeContacto" class="col-xs-12 text-center" role="form">
		<div class="form-group col-sm-10 col-md-8 text-center nofloat">
			<label for="nombre"></label>
			<input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre'];?>" class="requiredField">
		</div>
		<div class="form-group col-sm-10 col-md-8 text-center nofloat">
			<label for="email"></label>
			<input class="form-control" id="email" name="email" type="email" placeholder="E-mail" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" class="requiredField">
		</div>
		<div class="form-group col-sm-10 col-md-8 text-center nofloat">
			<label for="mensaje"></label>
			<textarea class="form-control" rows="6" id="mensaje" name="mensaje" placeholder="Mensaje" class="requiredField">
				<?php if(isset($_POST['mensaje'])) { if(function_exists('stripslashes')) {echo stripslashes($_POST['mensaje']);
			} 
			else {
				echo $_POST['mensaje']; 
			}
		} ?>
	</textarea>
</div>
<div class="checkbox checkbox col-xs-3 text-center nofloat">
	<label>
		<input type="checkbox" name="sendCopy" id="sendCopy" value="true" <?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?>>Enviar una copia a mi correo
	</label>
</div>
<input type="hidden" name="enviado" id="enviado" value="true" />
<?php if(isset($commentError)) { ?>
<span class="error"><?=$commentError;?></span> 
<?php } ?>
<button type="submit" class="col-sm-10 col-md-8 text-center nofloat btn btn-default"><span>ENVIAR MENSAJE</span></button>
</form>
<div class="col-xs-12 text-center">
	<div class="col-sm-10 col-md-8 text-center nofloat">
		<div class="contact-info">
			<i class="fa fa-desktop"></i>
			<a href="http://zonapro.net">zonapro.net</a>
		</div>
	</div>
	<div class="col-sm-10 col-md-8 text-center nofloat">
		<div class="contact-info"><i class="fa fa-map-marker"></i>Ciudad Guayana | Venezuela</div>
	</div>
	<div class="col-sm-10 col-md-8 text-center nofloat">
		<div class="contact-info"><i class="fa fa-phone"></i>+58 286 923.31.47</div>
		<div class="contact-info"><i class="fa fa-envelope-o"></i><a href="mailto:info@zonapro.net">info@zonapro.net</a></div>
	</div>
</div>
<div class="clearfix"></div>
</article>
