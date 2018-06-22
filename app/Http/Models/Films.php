<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Films extends Model{
    protected $id;
    protected $titre;
    protected $picture;
    protected $comment;
    protected $genre;
    protected $duree;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Films';

    public function getId(){
        return $this->id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getComment(){
        return $this->comment;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getDuree(){
        return $this->duree;
    }

    public function setTitre($titre){
        return $this->titre = $titre;
    }

    public function setImage($picture){
        return $this->picture = $picture;
    }

    public function setComment($comment){
        return $this->comment = $comment;
    }

    public function setCategory($genre){
        return $this->genre = $genre;
    }

    public function setDuration($duree){
        return $this->duree = $duree;
    }
}
