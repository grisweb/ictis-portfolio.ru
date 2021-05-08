<?php


namespace app\controllers;


use app\models\NewsModel;

class NewsController extends AppController
{
    public function indexAction()
    {
        $news = \R::findAll('news', 'ORDER BY date DESC');

        foreach($news as $newsItem)
        {
            $newsItem['date'] = NewsModel::getDate($newsItem['date']);
        }

        $this->setMeta('Новости', '', '');
        $this->set(compact('news'));
    }
}