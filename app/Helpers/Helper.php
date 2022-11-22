<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

function domainToSlug($string)
{
    return Str::of($string)
        ->trim('/')
        ->replaceMatches('#^https?://#', '')
        ->replaceMatches('/^(www\.)/i', '')
        ->replace('.', '_')
        ->replace('/', '_')
        ->__toString();
}
