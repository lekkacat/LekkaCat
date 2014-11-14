<div class="row">
	<h1>Neues Rezept anlegen</h1>
	<?php echo Form::open();?>
					  <label for="et_name">Titel</label>
			  <input name="et_name" id="et_name" type="text" class="form-control" placeholder="Titel deines Gerichtes">
			  <br/>
			  <input type="submit" value="Weiter" class="btn btn-default"/>
	<?php echo Form::close();?>
</div>
