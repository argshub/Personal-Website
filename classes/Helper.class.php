<?php

class Helper {

    public static function shortenString($string, $len){
        if(strlen($string) > $len){
            $string = rtrim(substr($string, 0, $len));
            $string .= substr($string, 0, strpos($string, " "))."&hellip;";
        } else {
            $string .= "&hellip;";
        }
        return $string;
    }

    public static function getImgSize($image, $case){
        if(is_file($image)){
            $size = getimagesize($image);
            return $size[$case];
        }
    }
}