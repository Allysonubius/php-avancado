<?php

namespace allys\modulo\ws;

class ViaCep
{
    private $url = "htps://viacep.com.br/ws/";
    /**
     * @var unset $zipCode;
    */

    public function get()
    {
        $get = file_get_contents($this -> url . $zipCode . "/json");

        return(array) json_decode($get);
    }
}
