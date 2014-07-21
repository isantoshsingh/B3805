<?php
$this->menu=array(
	array('label'=>'List Expenditure', 'url'=>array('index')),
	array('label'=>'Create Expenditure', 'url'=>array('create')),
	array('label'=>'View Expenditure', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Expenditure', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Expenditure #<?php echo $model->item_name; ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>