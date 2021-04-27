<?php


namespace app\controllers;


class ProjectController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];

        $project = \R::findOne('projects', 'alias = ?', [$alias]);

        $categories = \R::findAll('categories');

        if(!$project)
        {
            throw new \Exception('Страница не найдена!', 404);
        }

        $categories_id = \R::findAll('category_project', "id_project = $project->id");

        $project['categories_id'] = [];

        foreach($categories_id as $category_id)
        {
            array_push($project['categories_id'], $category_id->id_category);
        }


        $this->setMeta($project->name, $project->description, $project->name);
        $this->set(compact('project', 'categories'));
    }
}