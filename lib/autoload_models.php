<?php

function __autoload($class_name) {
    require_once(APP_ROOT . 'models/' . $class_name . '.php');
}

?>