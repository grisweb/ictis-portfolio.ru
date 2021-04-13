<?php


namespace ictis_portfolio\base;


use ictis_portfolio\Db;

abstract class Model
{
    public function __construct()
    {
        Db::instance();
    }


    public $attributes = [];
    public $errors = [];
    public $rules = [];
}