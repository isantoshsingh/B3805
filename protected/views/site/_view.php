<div class="col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?php echo CHtml::encode($data->name); ?>
        </div>
        <div class="panel-body">
            <p><?php echo 'Total: Rs <b>' . CHtml::encode($data->total) . '</b>'; ?></p>
        </div>
<!--        <div class="panel-footer">
            Panel Footer
        </div>-->
    </div>
</div>
