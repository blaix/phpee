<?php

# Define routes in order of priority.
#
# Routes are defined as an associative array in the form: array(regex => parts)
# where regex is a regular expression to be matched against the request uri,
# and parts is another associative array where the keys are one of 'controller',
# 'action', or 'id' and the values are either the index of the corresponding
# matched part of the request uri, or a string to use as the value instead.

$routes = array(
        
    # Homepage route. Maps '' or '/' to Homepage controller.
    '/^\/?$/' => array('controller' => 'homepage'),
    
    # Default route. Matches 'controller', 'controller/action', or 'controller/action/id'
    '/^([^\/]+)\/?([^\/]*)\/?([^\/]*)\/?$/' => array('controller' => 1, 'action' => 2, 'id' => 3)

);

?>