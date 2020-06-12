<?php

namespace allys\modulo;

use allys\modulo\ws\ViaCep;
    
class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
            $zipCode = preg_replace('/n[^0-9]/im', '', $zipCode);

            $get = $this -> getFromServer($zipCode);

            return (array) json_decode($get);
    }

    public function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();
        return $get -> get($zipCode);
    }

    public function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }
    }
}
