<div class="col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo CHtml::encode($data->name); ?>
        </div>
        <div class="panel-body">
            <p>Total expenditure till date</p>
        </div>
        <div class="panel-footer">
            <?php echo 'Rs <b>' . CHtml::encode($data->total) . '</b>'; ?>
        </div>
    </div>
</div>
