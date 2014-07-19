<?php $this->pageTitle = Yii::app()->name . ' | Contact Us'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Contact Us</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-6">
        <?php if (Yii::app()->user->hasFlash('contact')): ?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>
        <?php else: ?>
            <p>
                If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
            </p>


            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'contact-form',
                'enableClientValidation' => true,
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
                ),
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>    
            </div>


            <div class="form-group">
                <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'subject', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                <?php echo $form->textField($model, 'subject', array('maxlength' => 128, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'subject'); ?>
            </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'body', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'body'); ?>
            </div>
            </div>

            <?php if (CCaptcha::checkRequirements()): ?>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                    </div>

                    <p class="help-block">Please enter the letters as they are shown in the image above.
                        <br/>Letters are not case-sensitive.</p>
                    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
            <?php endif; ?>


            <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>

            <?php $this->endWidget(); ?>

        </div>
    </div><!-- form -->

<?php endif; ?>