<?php

CVarDumper::dump($cfg, 10, 1);

echo $this->renderPartial('_form', array('cfg'=>$cfg));
?>