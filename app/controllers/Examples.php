<?php

class Examples extends Controller {
    
    # Normal action that simply renders the template
    # at app/views/examples/index.php
    public function index() {
        return self::render();
    }
    
    # Bypasses the template rendering
    # and simply displays a string
    public function render_string() {
        return "a string";
    }
    
    # An id can be passed to this action
    # in the url like: /examples/passed_id/[id]
    public function passed_id($id) {
        # Make the id available to the passed_id.php template as $id
        # by assigning it to an associative array which is passed to render().
        $locals['id'] = $id;
        return self::render($locals);
    }
    
    public function articles() {
        $article = new Article();
        return $article->class_name;
    }
}

?>