<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Rfidno', 'rfidno', array('class'=>'control-label')); ?>

				<?php echo Form::input('rfidno', Input::post('rfidno', isset($park) ? $park->rfidno : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Rfidno')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Clientid', 'clientid', array('class'=>'control-label')); ?>

				<?php echo Form::input('clientid', Input::post('clientid', isset($park) ? $park->clientid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Clientid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Points left', 'points_left', array('class'=>'control-label')); ?>

				<?php echo Form::input('points_left', Input::post('points_left', isset($park) ? $park->points_left : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Points left')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Isin', 'isin', array('class'=>'control-label')); ?>

				<?php echo Form::input('isin', Input::post('isin', isset($park) ? $park->isin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Isin')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>