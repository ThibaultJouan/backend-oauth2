<?php

namespace App\Utilities;

abstract class Utility
{
    public static function getJsonValue(Array $jsonInput, string $key)
    {
        if(isset($jsonInput[$key]))
        {
            return $jsonInput[$key];
        }
        return null;
    }
}
?>