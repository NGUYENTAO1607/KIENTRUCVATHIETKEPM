<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($pet) ? $pet->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Issue date', 'issue_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('issue_date', Input::post('issue_date', isset($pet) ? $pet->issue_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Issue date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Is available', 'is_available', array('class'=>'control-label')); ?>

				<?php echo Form::input('is_available', Input::post('is_available', isset($pet) ? $pet->is_available : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Is available')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Info', 'info', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('info', Input::post('info', isset($pet) ? $pet->info : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Info')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>