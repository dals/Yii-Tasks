<?php

return array(
    'title' => 'Navigation-Administration',
    'data' => array(
        'items' => array(
            array('label' => 'Home', 'url' => array('/administration/default')),
            array('label' => 'Users', 'url' => array('/administration/users')),
            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/sign/out'), 'visible' => !Yii::app()->user->isGuest)
        ),
    )
);