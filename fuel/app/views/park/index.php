<h2>Listing Parks</h2>
<br>
<?php if ($parks): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Rfidno</th>
			<th>Clientid</th>
			<th>Points left</th>
			<th>Isin</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($parks as $item): ?>		<tr>

			<td><?php echo $item->rfidno; ?></td>
			<td><?php echo $item->clientid; ?></td>
			<td><?php echo $item->points_left; ?></td>
			<td><?php echo $item->isin; ?></td>
			<td>
				<?php echo Html::anchor('park/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('park/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('park/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Parks.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('park/create', 'Add new Park', array('class' => 'btn btn-success')); ?>

</p>
