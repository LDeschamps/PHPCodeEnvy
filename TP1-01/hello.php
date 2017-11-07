<?php

class Movie
{
    private $name;
    private $description;
    private $duration;
    private $releaseDate;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;        
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescrition($description = "")
    {
        $this->description = $description;        
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration)
    {
        $this->duration = $duration;        
    }
    
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }
    
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;        
    }

    public function __construct($name = "", $description = "", $duration, $release)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
    }
}

$movie1 = new Movie("Sharknado","Caca",120,13122012);
echo $movie1->getReleaseDate();







    