<?php
$this->breadcrumbs = array(
    'Tasks' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Tasks', 'url' => array('index')),
);
?>

<h1>Create Tasks</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>

<script type="text/javascript">
    $(function() {
        $( "#date-target-on" ).datepicker(
            {
                dateFormat: 'yy-mm-dd',
                			numberOfMonths: 2,
			showButtonPanel: true
            }
        );
    });
</script>