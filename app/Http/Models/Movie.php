<?php 

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model{
    protected $id;
    protected $title;
    protected $image;
    protected $description;
    protected $category;
    protected $duration;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getImage(){
        return $this->image;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function setTitle($title){
        return $this->title = $title;
    }

    public function setImage($image){
        return $this->image = $image;
    }

    public function setDescription($description){
        return $this->description = $description;
    }
    
    public function setCategory($category){
        return $this->category = $category;
    }

    public function setDuration($duration){
        return $this->duration = $duration;
    }
}
