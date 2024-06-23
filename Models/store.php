<?php

class Movie
{
    public $title;
    public $genre;
    public $yearRelease;
    public $nSerie;
    public $series;
    public function serie($nSerie)
    {
        if ($nSerie == 1) {
            $this->series = 'primo della serie';
        } elseif ($nSerie == 2) {
            $this->series = 'secondo della serie';
        } elseif ($nSerie == 3) {
            $this->series = 'terzo della serie';
        } elseif ($nSerie == 0) {
            $this->series = 'film stand-alone';
        } else {
            $this->series = 'prequel della serie';
        }
    }
    public function __construct($title, $genre, $yearRelease, $nSerie)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->yearRelease = $yearRelease;
        $this->nSerie = $nSerie;
        $this->serie($nSerie);
    }
}
