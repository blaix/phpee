<?php

class Inflector {    
    # Turn a space or underscore-seperated word into camel case.
    public static function camelize($string) {
        $string = str_replace('_', ' ', $string);
        $string = ucwords($string);
        $string = str_replace(' ', '', $string);
        return $string;
    }
    
    # Turn a space-seperated or camelized word into underscore-seperated word.
    public static function underscore($string) {
        $string = preg_replace('/([a-z])([A-Z])/', '$1_$2', $string);
        $string = preg_replace('/\s+/', '_', $string);
        return strtolower($string);
    }
}

?>