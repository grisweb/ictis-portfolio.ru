<?php


namespace app\models;


class NewsModel extends AppModel
{
    static function getDate($date): string
    {
        $month = self::$month[date('n', strtotime($date)) - 1];
        $day = date('j', strtotime($date));

        if (date('Y', strtotime($date)) === date('Y'))
        {
            return $day . ' ' . $month;
        }
        else
        {
            return $day . ' ' . $month . ' ' . date('Y', strtotime($date));
        }
    }

    private static $month = [
        'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ];
}