<?php
$this->breadcrumbs = array(
    'Dashboard',
);
$this->menu=array(
	array('label'=>'Create Task', 'url'=>array('/tasks/create')),
);
?>

<div id="calendar"></div>

<link rel='stylesheet' type='text/css' href='/css/fullcalendar.css' />
<script type='text/javascript' src='/js/fullcalendar/fullcalendar.js'></script>

<script type="text/javascript">
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            dayClick: function() {
                alert('a day has been clicked!');
            }
        })

    });    
</script>