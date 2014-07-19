<?php $this->pageTitle=Yii::app()->name . ' | Error';?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Error <?php echo $code; ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
<?php echo CHtml::encode($message); ?>
</div>