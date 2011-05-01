$(function(){
    $('button, input:submit').button();
    
    var currDate = new Date();
    $('input.datetime-input').datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: currDate
    });
})