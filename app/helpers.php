<?php

if(! function_exists('page_title')){
    function page_title($title){
        if($title === ''){
            return 'Laracarte - List of artisans';
        }else{
            return $title . ' | ' . 'Laracarte - List of artisans';
        }
    }
}