<?php
/* @var $this ExpenditureController */
/* @var $data Expenditure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->name); ?></b>
	<?php echo 'Total: Rs <b>'. CHtml::encode($data->total).'</b>'; ?>
	<br />

</div>