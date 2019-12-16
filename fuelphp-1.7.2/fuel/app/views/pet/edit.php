<h2>Editing <span class='muted'>Pet</span></h2>
<br>

<?php echo render('pet/_form'); ?>
<p>
	<?php echo Html::anchor('pet/view/'.$pet->id, 'View'); ?> |
	<?php echo Html::anchor('pet', 'Back'); ?></p>
