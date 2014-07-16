<?php
$this->breadcrumbs = array(
    'reset password',
);

$this->menu = array(
    array('label' => 'Create Expenditure', 'url' => array('expenditure/expenditure/create')),
    array('label' => 'Manage Expenditure', 'url' => array('expenditure/expenditure/admin')),
);
?>

<h1>User #<?php echo $model->username; ?></h1>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($pform,'password'); ?>
        <?php echo $form->passwordField($pform, 'password', array('placeholder' => 'New Password', 'maxlength' => 15)); ?>
        <?php echo $form->error($pform,'password'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($pform,'verifyPassword'); ?>
        <?php echo $form->passwordField($pform, 'verifyPassword', array('placeholder' => 'Confirm Password', 'maxlength' => 15)); ?>
        <?php echo $form->error($pform,'verifyPassword'); ?>
    </div>
    <div class="row">
        <?php echo CHtml::submitButton('Reset'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>