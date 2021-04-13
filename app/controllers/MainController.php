<?php


namespace app\controllers;

use ictis_portfolio\base\Controller;
use ictis_portfolio\Cache;

class MainController extends AppController
{
     public function indexAction()
     {
         $news = \R::findAll('news');
         $mentors = \R::findAll('mentors');
         $best_projects = \R::findAll('projects');
         //$category_project = \R::findAll('category_project');




         $this->setMeta('Главная', 'Описание...', 'Ключевики...');

         $this->set(compact('news', 'mentors', 'best_projects'));
     }
}