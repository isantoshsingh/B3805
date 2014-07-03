<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */

$this->breadcrumbs=array(
	'Expenditures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Expenditure', 'url'=>array('index')),
	array('label'=>'Create Expenditure', 'url'=>array('create')),
	array('label'=>'Update Expenditure', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Expenditure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expenditure', 'url'=>array('admin')),
);
?>

<h1>View Expenditure #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'item_name',
		'description',
		'price',
		'created',
		'modified',
		'purchase_date',
	),
)); ?>
