<?php
include_once dirname(__FILE__)."/markdown.php";
//$my_html = Markdown($my_text);
if(isset ($_POST['data']) && strlen($_POST['data']) > 0)
{
    echo Markdown($_POST['data']);  
}
