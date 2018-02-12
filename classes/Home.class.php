<?php

class Home {

    public static function run(){
        ob_start();
        ob_get_flush();
        require_once(Url::getPage());
    }
}