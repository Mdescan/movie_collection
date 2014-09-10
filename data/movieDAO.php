<?php
require_once 'DBConfig.php';
require_once '/entities/movie.php';
class MovieDAO{
    public function GetAll(){
        $lijst = array();
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $sql = "select movie.id as movieid,title,genre,length,aduserid,users.id as userid,username,password,email   from movie,users
        where aduserid =users.id";
        $resultSet = $dbh->query($sql);
        foreach ($resultSet as $rij) {
            $movie = movie::create($rij["movieid"],$rij["title"],$rij["genre"],$rij["length"],$rij["username"]);
            array_push($lijst, $movie);
        }
        $dbh = null;
        return $lijst;
    }
}