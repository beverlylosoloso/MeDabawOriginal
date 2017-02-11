

<?php echo Form::open(array("class"=>"form-horizontal",'enctype' => 'multipart/form-data', "method" => 'POST')); ?>

    <fieldset>

         <div class="form-group">
            <?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>
				 <input type= "email" name="email" required  >
        </div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>
		</div>
 </fieldset>
<?php echo Form::close(); ?>