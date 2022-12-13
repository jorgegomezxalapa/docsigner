<?php


namespace EdgarOrozco\Docsigner\Facades;


use Illuminate\Support\Facades\Facade;

class Docsigner extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docsigner';
    }
}
