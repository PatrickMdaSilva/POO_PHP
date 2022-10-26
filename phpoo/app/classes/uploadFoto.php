<?php

namespace app\classes;

use app\traits\ValidationFile;

class UploadFoto extends Upload{ // extensão da mesma familia de classes



    protected $extensions = ['png', 'jpg'];

    protected function upload(){
        return $this->teste();
    }
    
}