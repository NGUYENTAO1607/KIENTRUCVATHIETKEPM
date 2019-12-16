<h2>Listing <span class='muted'>Pets</span></h2>
<br>
<?php if ($pets): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Issue date</th>
			<th>Is available</th>
			<th>Info</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($pets as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->issue_date; ?></td>
			<td><?php echo $item->is_available; ?></td>
			<td><?php echo $item->info; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('pet/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('pet/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('pet/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Pets.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('pet/create', 'Add new Pet', array('class' => 'btn btn-success')); ?>

</p>
