<?php


namespace app\controllers;


use app\models\ProjectModel;

class ProjectController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];

        $project = \R::findOne('projects', 'alias = ?', [$alias]);

        if(!$project)
        {
            throw new \Exception('Страница не найдена!', 404);
        }

        $project['gallery'] = \R::findAll('gallery', 'project_id = ?', [$project['id']]);

        $project['video'] = \R::findAll('video', 'project_id = ?', [$project['id']]);

        $project['categories'] = ProjectModel::getCategories($project['id']);


        $this->setMeta($project->name, $project->description, $project->name);
        $this->set(compact('project', 'categories'));
    }
}