<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    ));
                    ?>

                    <fieldset>
                        <div class="form-group">

                            <?php echo $form->textField($model, 'username', array('placeholder' => 'Username', 'class' => 'form-control', 'autofocus' => ''));
                            ?>

                            <?php echo $form->error($model, 'username'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password', 'class' => 'form-control'));?>
                            <?php echo $form->error($model, 'username'); ?>
                        </div>
                        <div class="checkbox">
                            <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'rememberMe'); ?>
                        </div>
                        
                        <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-lg btn-success btn-block')); ?>
                    </fieldset>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
