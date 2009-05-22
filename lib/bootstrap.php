<?php

define('LIB_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/../lib/');
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/../app/');
define('CONFIG_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/../config/');

# Necessarry libraries
require(LIB_ROOT . 'inflector.php');
require(LIB_ROOT . 'controller.php');
require(LIB_ROOT . 'model.php');

# Handles and renders the actual request.
# The order here is important!
require(LIB_ROOT . 'routing.php');
require(LIB_ROOT . 'dispatch.php');

?>