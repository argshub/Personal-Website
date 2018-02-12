<?php

class Pages {

    private $table = "badsha_mp_pages";
    private $table_2 = "self_biography";
    public static $path = "media/";

    public function getPages($id){
        $sql = "SELECT * FROM `{$this->table}` WHERE  `slug` = '$id' OR `id` = '$id'";
        return Apps::getInstance()->fetchOne($sql);
    }

    public function getBio(){
        $sql = "SELECT * FROM `{$this->table_2}` ORDER BY id ASC";
        return Apps::getInstance()->fetchAll($sql);
    }

    public function getBioParts($id){
        $sql = "SELECT * FROM `{$this->table_3}` WHERE `id` = '$id'";
        return Apps::getInstance()->fetchOne($sql);
    }


}