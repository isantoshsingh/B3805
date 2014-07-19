<?php
/* @var $this ExpenditureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expenditures',
);

$this->menu=array(
	array('label'=>'Create Expenditure', 'url'=>array('create')),
	array('label'=>'Manage Expenditure', 'url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">My Expenditures</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>