<?php

namespace ImagickDemo\Imagick;


class convolveImage extends ImagickExample {

    function renderDescription() {
    }

    function renderImage() {
        $imagick = new \Imagick(realpath($this->imagePath));
        $edgeFindingKernel = [-1, -1, -1, -1, 8, -1, -1, -1, -1,];
        $imagick->convolveImage($edgeFindingKernel);
        header("Content-Type: image/jpg");
        echo $imagick->getImageBlob();
    }
}