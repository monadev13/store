<?php

namespace App\Traits;

trait ImageTrait
{
    public function uploadImage($file,$filename,$folder,$oldfile=null){

        $file->storeAs('public/images/'.$folder, $filename);

        if(!is_null($oldfile)){
            unlink(public_path('public/images/'.$folder.'/'.$oldfile));
        }

       return $filename;
    }


}
