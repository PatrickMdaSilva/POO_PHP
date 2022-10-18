<?php

namespace app\classes;



class UploadFoto extends Upload{ // extensão da mesma familia de classes

    public $file;
    public $newName;
    public $extensions = ['png', 'jpg'];

    public function __construct($file){
        $this->file = $file;
    }

    public function extension(){
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function rename(){
        $uniqId = uniqid(true);
        $this->newName = $uniqId . '.' . $this->extension();
    }

    public function upload(){
        return $this->newName;
    }
}