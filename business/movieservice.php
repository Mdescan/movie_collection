<?php
require_once '/data/movieDAO.php';
class MovieService{
    public function ShowAllMovies(){
        $movielijst = new MovieDAO();
        $list=$movielijst->GetAll();
        return $list;
    }
    
}