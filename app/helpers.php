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

if(! function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}