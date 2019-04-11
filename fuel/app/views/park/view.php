<h2>Viewing #<?php echo $park->id; ?></h2>

<p>
	<strong>Rfidno:</strong>
	<?php echo $park->rfidno; ?></p>
<p>
	<strong>Clientid:</strong>
	<?php echo $park->clientid; ?></p>
<p>
	<strong>Points left:</strong>
	<?php echo $park->points_left; ?></p>
<p>
	<strong>Isin:</strong>
	<?php echo $park->isin; ?></p>

<?php echo Html::anchor('park/edit/'.$park->id, 'Edit'); ?> |
<?php echo Html::anchor('park', 'Back'); ?>