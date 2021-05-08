<?php


namespace app\controllers;


use app\models\NewsModel;

class NewsItemController extends AppController
{
    public function viewAction()
    {
        $id = $this->route['id'];
        $newsItem = \R::findOne('news', 'id = ?', [$id]);

        if(!$newsItem)
        {
            throw new \Exception('Страница не найдена!', 404);
        }

        $newsItem['date'] =NewsModel::getDate($newsItem['date']);

        $this->setMeta($newsItem->title, '', '');
        $this->set(compact('newsItem'));
    }
}