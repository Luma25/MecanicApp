<?php echo validation_errors(); ?>

<?php echo form_open('mecanicapp/vehchec/'. $idveh); ?>
       

	<label for="servicio">Servicio</label>
    <select name="servicio">
    	<?php foreach ($servicios as $news_item): ?>

    		<option value=<?php echo $news_item['patente'];?>><?php echo $news_item['patente'];?></option>



  		<?php endforeach; ?>
	</select>
	<br />

    <input type="submit" name="submit" value="Agregar" />

</form>
<br>
<a href="<?php echo site_url('Mecanicapp/finche/'. $idveh); ?>">Finalizar</a>
