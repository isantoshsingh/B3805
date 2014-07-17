<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Core CSS - Include with every page -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- SB Admin CSS - Include with every page -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin.css" rel="stylesheet">

    </head>

    <body>

        <?php echo $content; ?>
        
        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>

        <!-- SB Admin Scripts - Include with every page -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/sb-admin.js"></script>

    </body>

</html>
