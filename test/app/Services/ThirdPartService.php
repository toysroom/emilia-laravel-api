<?php

namespace App\Services;

class ThirdPartService
{

    private String $apiKey;

    public function __construct(String $apiKey)
    {
        $this->apiKey = $apiKey;
    }

}