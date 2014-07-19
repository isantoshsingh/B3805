<?php $this->pageTitle = Yii::app()->name . ' | Change Password'; ?>
<?php
$this->menu = array(
    array('label' => 'Create Expenditure', 'url' => array('expenditure/expenditure/create')),
    array('label' => 'Manage Expenditure', 'url' => array('expenditure/expenditure/admin')),
);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Change Password</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-6">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-form',
            'htmlOptions' => array(
                'class' => 'form-horizontal',
            ),
            'enableAjaxValidation' => false,
        ));
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($pform, 'password', array('class' => 'col-sm-5 control-label')); ?>
            <div class="col-sm-7">
                <?php echo $form->passwordField($pform, 'password', array('placeholder' => 'New Password', 'maxlength' => 15, 'class' => 'form-control')); ?>
                <?php echo $form->error($pform, 'password'); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($pform, 'verifyPassword', array('class' => 'col-sm-5 control-label')); ?>
            <div class="col-sm-7">
                <?php echo $form->passwordField($pform, 'verifyPassword', array('placeholder' => 'Confirm Password', 'maxlength' => 15, 'class' => 'form-control')); ?>
                <?php echo $form->error($pform, 'verifyPassword'); ?>
            </div>
        </div>

        <div class="col-sm-5"></div>
        <div class="col-sm-7">
        <?php echo CHtml::submitButton('Reset', array('class' => 'btn btn-primary')); ?>
</div>

        <?php $this->endWidget(); ?>
    </div>
</div>