
    <div class="col-lg-6">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'expenditure-form',
            'htmlOptions' => array(
                    'class' => 'form-horizontal',
                ),
            'enableAjaxValidation' => false,
        ));
        ?>


        <div class="form-group">
            <?php echo $form->labelEx($model, 'item_name', array('class' => 'col-sm-4 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'item_name', array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description', array('class' => 'col-sm-4 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'price', array('class' => 'col-sm-4 control-label')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'price', array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'purchase_date', array('class' => 'col-sm-4 control-label')); ?>
            <div class="col-sm-8">
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'purchase_date',
                    'options' => array(
                        'dateFormat' => 'dd-mm-yy', // format of "2012-12-25"
                        'showOtherMonths' => true, // show dates in other months
                        'selectOtherMonths' => true, // can seelect dates in other months
                    ),
                    'htmlOptions' => array(
                        'size' => '10', // textField size
                        'maxlength' => '10', // textField maxlength
                        'class' => 'form-control',
                    ),
                ));
                ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'with_user', array('class' => 'col-sm-4 control-label')); ?>
            <div class="col-sm-8">
            <?php
        $data = CHtml::listData(User::model()->findAll('id!='.Yii::app()->user->id), 'id', 'name');
        echo CHtml::checkBoxList('Expenditure[with_user]', @array_values($model->with_user), $data);
    ?>
            </div>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
