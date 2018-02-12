<?php

class Apps {

    public static $instance = null;
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new DB();
        }
        return self::$instance;
    }
}