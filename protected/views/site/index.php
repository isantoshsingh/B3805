<?php $this->pageTitle = Yii::app()->name; ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
    ));
    ?>
</div>