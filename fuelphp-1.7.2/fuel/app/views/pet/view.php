<h2>Viewing <span class='muted'>#<?php echo $pet->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $pet->name; ?></p>
<p>
	<strong>Issue date:</strong>
	<?php echo $pet->issue_date; ?></p>
<p>
	<strong>Is available:</strong>
	<?php echo $pet->is_available; ?></p>
<p>
	<strong>Info:</strong>
	<?php echo $pet->info; ?></p>

<?php echo Html::anchor('pet/edit/'.$pet->id, 'Edit'); ?> |
<?php echo Html::anchor('pet', 'Back'); ?>