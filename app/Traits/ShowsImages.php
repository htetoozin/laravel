<?php

namespace App\Traits;

trait ShowsImages
{

    public function noCache()
    {

        return '?'. 'time='. time();
    }

    public function showImage($imageModel, $path)
    {

        return $path . $imageModel->image_name
                     . '.'
                     . $imageModel->image_extension
                     . $this->noCache();

    }


}