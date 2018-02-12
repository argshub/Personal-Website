<?php
class Paging {
    public $records;
    public $num_of_records;
    public $num_of_pages;
    public $max_pp;
    public $current;
    public $offset;
    public $url;
    public static $key = "pg";

    public function __construct($rows, $max = 10)
    {
        $this->records = $rows;
        $this->num_of_records = count($this->records);
        $this->max_pp = $max;
        $this->url = Url::getCurrentUrl(self::$key);
        $current = Url::getParam(self::$key);
        $this->current = !empty($current) ? $current : 1;
        $this->numOfPages();
        $this->getOffset();
    }

    public function numOfPages(){
        $this->num_of_pages = ceil($this->num_of_records / $this->max_pp);
    }

    public function getOffset(){
        $this->offset = ($this->current - 1) * $this->max_pp;
    }

    public function getRecords(){
        $out = array();
        if($this->num_of_pages > 1){
            $last = $this->offset + $this->max_pp;
            for($i = $this->offset; $i < $last; $i++) {
                if($i < $this->num_of_records){
                    $out[] = $this->records[$i];
                }
            }
        } else {
            $out[] = $this->records;
        }
        return $out;
    }

    public function getLinks(){
        if($this->num_of_pages > 1){
            $out = array();
            if($this->current > 1){
                $out[] = "<a href=\"{$this->url}\">First</a>";
            } else {
                $out[] = "<span>First</span>";
            }

            if($this->current > 1){
                $id = $this->current - 1;
                $url = $id > 1 ? $this->url."&".self::$key."=".$id : $this->url;
                $out[] = "<a href=\"{$url}\">Previous</a>";
            } else {
                $out[] = "<span>Previous</span>";
            }
            if($this->current != $this->num_of_pages){
                $id = $this->current + 1;
                $url = $id > 1 ? $this->url."&".self::$key."=".$id : $this->url;
                $out[] = "<a href=\"{$url}\">Next</a></li>";
            } else {
                $out[] = "<span>Next</span>";
            }

            if($this->current != $this->num_of_pages){
                $url = $this->url."&".self::$key."=".$this->num_of_pages;
                $out[] = "<a href=\"{$url}\">Last</a></li>";
            } else {
                $out[] = "<span>last</span>";
            }
            return "<li>".implode("</li><li>", $out)."</li>";
        }
    }
    public function getPaging(){
        $links = $this->getLinks();
        if(!empty($links)){
            $out = "<ul class=\"pager\">";
            $out .= $links;
            $out .= "</ul>";
            return $out;

        }
    }
}