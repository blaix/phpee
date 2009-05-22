<?php

require(CONFIG_ROOT . 'routes.php');

# Find the first route that matches the request uri.
foreach($routes as $route => $parts) {
    if(preg_match($route, $_GET['request_uri'], &$matches)) {
        
        # Parse the route into a controller, action, and id
        
        if(is_string($parts['controller'])) {
            $controller_name = $parts['controller'];
        } else {
            $controller_name = $matches[$parts['controller']];
        }
        
        if(is_string($parts['action'])) {
            $action = $parts['action'];
        } else {
            $action = empty($matches[$parts['action']]) ? 'index' : $matches[$parts['action']];
        }
        
        if(is_string($parts['id'])) {
            $id = $parts['id'];
        } else {
            $id = $matches[$parts['id']];
        }
        
        break;
    }
}

if(empty($controller_name) || empty($action)) {
    die("Can't find matching route.");
} else {
    $controller_name = Inflector::camelize($controller_name);
}

?>