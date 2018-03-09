<?php

if ( ! function_exists('v') ) {

    function v($var, $die = true){
        echo '<pre>';
        var_dump($var);
        if(is_object($var)){
            if(get_class($var)!==null){
                echo 'Methods';
                var_dump(get_class_methods($var));
            }
        }
        echo '</pre>';
     
        if ($die)
            die();
    }

}