<?php

class DB {

    public $dbc, $query, $result, $error = false, $count = 0;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        try {
            $this->dbc = new mysqli(Config::get('mysql/host'), Config::get('mysql/username'), Config::get('mysql/password'));
            if(!$this->dbc){
                throw new Exception("connection error");
            } else {
                $this->dbc->select_db(Config::get('mysql/name'));
            }
            $this->dbc->set_charset("utf8");

        } catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function query($sql){
        return $this->dbc->query($sql);
    }

    public function fetchAll($sql){
        $out = array();
        if($this->result = $this->query($sql)){
            $this->displayQuery($this->result);
        }
        while($result = $this->result->fetch_assoc()){
            $out[] = $result;
        }
        return $out;
    }

    public function displayQuery($result){
        if(!$result){
            $this->error = true;
        } else {
            $this->count = $this->dbc->affected_rows;
        }
    }

    public function fetchOne($sql){
        $this->result = $this->fetchAll($sql);
        return array_shift($this->result);
    }

    public function close(){
        return $this->dbc->close();
    }

    public function lastId(){
        return $this->dbc->insert_id;
    }

    public function escape($value){
        try {
            if(function_exists("mysqli_real_escape_string")){
                if(get_magic_quotes_gpc()){
                    $value = stripslashes($value);
                }
                $this->dbc->real_escape_string($value);
            } else {
                if(!get_magic_quotes_gpc()){
                    $value = addcslashes($value);
                }
            }
            return $value;

        } catch(Exception $e){
            die($e->getMessage());
        }
    }


}