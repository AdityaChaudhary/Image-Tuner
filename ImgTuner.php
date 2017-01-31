<?php

/**
 * Created by IntelliJ IDEA.
 * User: aditya
 * Date: 31/01/17
 * Time: 10:06 AM
 */

require 'vendor/autoload.php';

use Imagine\Image\Box;
use Imagine\Image\Point;

class ImgTuner
{


    private $imagine;
    private $image;

    /**
     * ImgTuner constructor.
     * @param $imagine
     */
    public function __construct()
    {
        $this->imagine = new Imagine\Gd\Imagine();
    }


    public function open($path)
    {
        try {
            $this->image = $this->imagine->open($path);
        } catch (Imagine\Exception\Exception $e) {
            // handle the exception
            throw $e;
        }
    }

    public function rotate($angle)
    {
        $this->image->rotate($angle);
    }


    public function resize($length, $breadth)
    {
        $this->image->resize(new Box($length, $breadth));
    }

    public function negative(){
        $this->image->effects()->negative();
    }


    public function save($path)
    {
        $this->image->save($path);
    }


    public function show(){
        return $this->image->show('jpg');
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }





}