<?php

class Url {

    public static $folder = PUBLIC_DIR;
    public static $page = "page";
    public static $params = [];


    public static function getParam($key){
        return isset($_GET[$key]) && $_GET[$key] != "" ? $_GET[$key] : null;
    }


    public static function cPage(){
        return isset($_GET[self::$page]) ? $_GET[self::$page] : 'home';
    }

    public static function getPage(){
        $page = self::$folder.DS.self::cPage().EXT;
        $error = self::$folder.DS."error".EXT;
        return is_file($page) ? $page : $error;
    }

    public static function getAll(){
        if(!empty($_GET)){
            foreach ($_GET as $key => $value) {
                if(!empty($value)){
                    self::$params[$key] = $value;
                }
            }
        }
    }

    public static function getCurrentUrl($remove = null){
        self::getAll();
        $out = array();
        if(!empty($remove)){
            $remove = !is_array($remove) ? array($remove) : $remove;
            foreach (self::$params as $key => $value) {
                if(in_array($key, $remove)){
                    unset(self::$params[$key]);
                }
            }
        }
        foreach (self::$params as $key => $value) {
            $out[] = $key."=".$value;
        }
        return "?".implode("&", $out);
    }


}