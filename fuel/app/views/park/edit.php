<h2>Editing Park</h2>
<br>

<?php echo render('park/_form'); ?>
<p>
	<?php echo Html::anchor('park/view/'.$park->id, 'View'); ?> |
	<?php echo Html::anchor('park', 'Back'); ?></p>
