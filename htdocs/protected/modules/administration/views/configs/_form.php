<?php
echo CHtml::form();

echo CHtml::textField('cfg[title]', $cfg['title']);

function parseCfgArray($cfg) {
    foreach ($cfg as $key => $value) {
        if(strtolower($key) == 'url') {
            echo $key.' == ';
            continue;
        }
        
        if(is_array($value)) {
            parseCfgArray($value);
        } else {
            echo (is_numeric($key)?'':$key).' '.$value.'<br>';
        }
    }
}

parseCfgArray($cfg['data']);

echo CHtml::endForm();
?>