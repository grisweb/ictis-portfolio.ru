<?php


namespace app\controllers;


use app\widgets\filter\Filter;

class ProjectsController extends AppController
{
    public function indexAction()
    {

        $projects = \R::findAll('projects');

        $categories = \R::findAll('categories');

        foreach($projects as $project)
        {
            $categories_id = \R::findAll('category_project', "id_project = $project->id");

            $project['categories_id'] = [];

            foreach($categories_id as $category_id)
            {
                array_push($project['categories_id'], $category_id->id_category);
            }
        }

        if(!empty($_GET['filter']))
        {
            $filter = Filter::getFilter();
        }

        if($this->isAjax())
        {
            debug($filter);
            die;
        }

        $this->setMeta('Проекты', 'Список проектов');

        $this->set(compact('projects', 'categories'));
    }
}