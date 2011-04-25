<?php

/**
 * Description of EConfigLoader
 *
 * @author dmitry.seredinov@gmail.com
 */
class EConfigLoader {

    public static function load($path, $section='') {
        $path = Yii::getPathOfAlias('application.data.configs').'/'.$path.'.php';
        $data = NULL;
        if(is_readable($path)) {
            $data = include $path;
        }
        if(!empty ($data) && array_key_exists($section, $data) && strlen(trim($section)) > 0) {
            $data = $data[trim($section)];
        }
        return $data;
    }
    
}
