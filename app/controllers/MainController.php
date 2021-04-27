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
         $categories = \R::findAll('categories');

         foreach($best_projects as $best_project)
         {
             $categories_id = \R::findAll('category_project', "id_project = $best_project->id");

             $best_project['categories_id'] = [];

             foreach($categories_id as $category_id)
             {
                 array_push($best_project['categories_id'], $category_id->id_category);
             }
         }

         $this->setMeta('Главная', 'Описание...', 'Ключевики...');

         $this->set(compact('news', 'mentors', 'best_projects', 'categories'));
     }
}