<?php
/* @var $this ExpenditureController */
/* @var $data Expenditure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->user->name); ?></b>
	<?php echo CHtml::encode($data->item_name); ?>
	<?php echo 'Rs. '. CHtml::encode($data->price); ?>

	<?php echo CHtml::encode(date('d/M/y',$data->purchase_date)); ?>
	<br />

</div>