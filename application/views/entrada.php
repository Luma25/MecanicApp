<h2><?php echo $subtitle1; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('mecanicapp'); ?>
       


    <label for="mail">Mail</label>
    <input type="text" name="mail" /><br />

    <label for="pass">Password</label>
    <input type="text" name="pass" /><br />

    <input type="submit" name="submit" value="Ingresar" />

</form>