<?php

namespace ImagickDemo\Imagick;


class averageImages  extends ImagickExample  {

    function renderDescription() {
        return "Needs two images. Function is deprecated, and kills PHP. I suggest not using it.";
    }

    function renderImage() {

        return ;
        try {
        
        $imagick = new \Imagick(realpath($this->imagePath));
        //$imagick2 = new \Imagick(realpath("../images/TestImage2.jpg"));

        //$imagick->addImage($imagick2);

        //This kills PHP  - but the function is deprecated.
        $averageImage = @$imagick->averageImages();

        $averageImage->setImageType('jpg');
        header("Content-Type: image/jpg");
        echo $averageImage->getImageBlob();
            
        }
        catch (\Exception $e) {
            echo "arrgh ".$e->getMessage();
        }
    }
}