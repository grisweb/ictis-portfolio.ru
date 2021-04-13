<?php


namespace ictis_portfolio;


trait TSingletone
{
    public static function instance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private static $instance;
}