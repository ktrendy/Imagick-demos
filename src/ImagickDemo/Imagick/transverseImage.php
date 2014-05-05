<?php

namespace ImagickDemo\Imagick;


class transverseImage extends ImagickExample {

    function renderDescription() {
    }

    function renderImage() {
        $imagick = new \Imagick(realpath($this->imagePath));
        $imagick->transverseImage();
        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }
}