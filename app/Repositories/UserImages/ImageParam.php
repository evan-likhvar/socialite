<?php


namespace App\Repositories\UserImages;


class ImageParam
{
    private $param;

    public function __construct()
    {
        $this->param = config('images');
    }


    public function __get ( string $name )
    {
        return array_key_exists($name, $this->param) ? $this->param[$name] : null;
    }

}