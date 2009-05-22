<?php

# Find and include the controller.
$controller_path = APP_ROOT . 'controllers/' . $controller_name . '.php';
if(file_exists($controller_path)) {
    require($controller_path);
} else {
    die("Can't find controller: $controller_name");
}

# Instantiate the controller and call the action.
$controller = new $controller_name();
echo $controller->$action($id);

?>