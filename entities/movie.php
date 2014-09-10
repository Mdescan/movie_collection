<?php
class movie{
    private static $idMap = array();
    private $id;
    private $title;
    private $genre;
    private $length;
    private $addedBy;
    
    private function __construct($id,$title,$genre,$length,$addedBy) {
        $this->id=$id;
        $this->title=$title;
        $this->genre=$genre;
        $this->length=$length;
        $this->addedBy=$addedBy;
    }
    public static function create($id,$title,$genre,$length,$addedBy){
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new movie($id,$title,$genre,$length,$addedBy);
        }
        return self::$idMap[$id];
    }

    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getGenre(){
        return $this->genre;
    }
    
    public function getLength(){
        return $this->length;
    }
    
    public function getAddedBY(){
        return $this->addedBy;
    }

    public function setId(){
        $this->id=$id;
    }
    
    public function setTitle(){
        $this->title=$title;
    }
    
    public function setGenre(){
        $this->genre=$genre;
    }
    
    public function setLength(){
        $this->length=$length;
    }
    
    public function setAddedBY(){
        $this->addedBy=$addedBy;
    }
}

