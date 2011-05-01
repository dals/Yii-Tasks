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
        if(empty ($data)) {
            return $data;
        }
        
        if(strlen(trim($section)) == 0) {// If cfg won't store items in special section - return raw 'data' section content!
            return $data['data'];
        }
        
        if(array_key_exists($section, $data['data']) && strlen(trim($section)) > 0) {
            $data = $data['data'][trim($section)];
        }

        return $data;
    }
    
}
