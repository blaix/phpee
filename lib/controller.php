<?php

class Controller {
    
    # Variables that should be local to the template should be passed
    # as an associative array in the form: array('name' => 'value').
    protected function render($locals = array()) {
        foreach($locals as $key => $value) { $$key = $value; }        
        
        $template = APP_ROOT . "views/$GLOBALS[controller_name]/$GLOBALS[action].php";
        $layout = APP_ROOT . "views/layout.php";        
        
        ob_start();
        
        if(file_exists($layout)) {
            include($layout);
        } else {
            include($template);
        }
        
        return ob_get_clean();
    }
}

?>