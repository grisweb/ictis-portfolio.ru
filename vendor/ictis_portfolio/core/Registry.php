<?php


namespace ictis_portfolio;


class Registry
{
    use TSingletone;

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$properties[$name]))
        {
            return self::$properties[$name];
        }

        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }

    private static $properties = [];
}