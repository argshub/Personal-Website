<?php
class Works {

    public static $path = "media/";
    private $table = "development_works";
    private $table_2 = "works_images";
    private $table_3 = "first";

    public function getFirst(){
        $sql = "SELECT * FROM `{$this->table_3}";
        return Apps::getInstance()->fetchOne($sql);
    }


    public function getWork(){
        $sql = "SELECT * FROM `{$this->table}`";
        return Apps::getInstance()->fetchAll($sql);
    }

    public function getImageById($id){
        $sql = "SELECT * FROM `{$this->table_2}` WHERE `works_id` = '$id' LIMIT 1";
        return Apps::getInstance()->fetchOne($sql);
    }

    public function getImg($id){
        $sql = "SELECT * FROM `{$this->table_2}` WHERE `works_id` = '$id'";
        return Apps::getInstance()->fetchAll($sql);
    }
}