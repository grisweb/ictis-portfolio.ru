<?php


namespace app\controllers;

use app\models\ProjectModel;
use ictis_portfolio\base\Controller;
use ictis_portfolio\Cache;

class MainController extends AppController
{
     public function indexAction()
     {
         $news = \R::findAll('news');
         $mentors = \R::findAll('mentors');
         $best_projects = \R::findAll('projects');
         $categories = \R::findAll('categories');

         foreach($best_projects as $best_project)
         {
             $best_project['categories'] = ProjectModel::getCategories($best_project['id']);
         }

         $this->setMeta('Главная', 'Описание...', 'Ключевики...');

         $this->set(compact('news', 'mentors', 'best_projects', 'categories'));
     }
}