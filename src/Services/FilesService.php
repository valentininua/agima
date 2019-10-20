<?php

namespace App\Services;

class FilesService
{
    /**
     * @return array
     */
    public function uploadFiles()
    {
        $time= time();
        $uploaddir = $_ENV['APP_UPLOAD_DIR'];
        if (!isset($_FILES['files']['name'])) {
            return  ['status'=>"error"];
        }
        $path = $_FILES['files']['name'][0];
        $name = md5($path . $time) . "." . pathinfo($path, PATHINFO_EXTENSION);
        $uploadfile = $uploaddir . $name;
        if (move_uploaded_file($_FILES['files']['tmp_name'][0], $uploadfile) ){
            return [
                'name' => $_FILES['files']['name'][0],
                'size' => $_FILES['files']['size'][0],
                'href' => $name,
            ];
        }else{
            return null;
        }
    }

}
