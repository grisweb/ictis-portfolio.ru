<?php


namespace ictis_portfolio;


class App
{
    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');

        session_start();

        self::$app = Registry::instance();

        $this->getParams();

        new ErrorHandler();

        Router::dispatch($query);
    }

    private function getParams()
    {
        $params = require_once CONF . '/params.php';

        if (!empty($params))
        {
            foreach ($params as $key => $value)
            {
                self::$app->setProperty($key, $value);
            }
        }
    }

    public static $app;
}