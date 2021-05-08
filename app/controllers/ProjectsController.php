<?php


namespace app\controllers;


use app\models\ProjectModel;
use app\widgets\filter\Filter;
use ictis_portfolio\App;
use ictis_portfolio\libs\Pagination;

class ProjectsController extends AppController
{
    public function indexAction()
    {
        $sql_part = '';

        if(!empty($_GET['filter']))
        {
            $filter = Filter::getFilter();
            $sql_part = "id IN (SELECT id_project FROM category_project WHERE id_category IN ($filter))";
        }

        $sort = 'rating';

        $sortSelect = [
            'rating' => ' selected',
            'reviews' => '',
            'date' => '',
        ];

        if (!empty($_GET['sort']))
        {
            if ($_GET['sort'] === 'reviews')
            {
                $sort = 'reviews_count';
                $sortSelect['rating'] = '';
                $sortSelect['reviews'] = ' selected';
            }
            else if($_GET['sort'] === 'date')
            {
                $sort = 'date';
                $sortSelect['rating'] = ' selected';
                $sortSelect['date'] = ' selected';
            }
        }

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = \R::count('projects', "$sql_part");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $projects = \R::findAll('projects', "$sql_part ORDER BY $sort DESC LIMIT $start, $perpage");
        $categories = \R::findAll('categories');

        $viewList = [
            "list" => " projects-list__view-btn--active",
            "grid" => "",
            "item" => " project-block--projects",
        ];

        if(!empty($_GET['view']))
        {
            if($_GET['view'] == 'grid')
            {
                $viewList['list'] = '';
                $viewList['grid'] = ' projects-list__view-btn--active';
                $viewList['item'] = ' project-block--mobile';
            }
        }

        foreach($projects as $project)
        {
            $project['categories'] = ProjectModel::getCategories($project['id']);
        }

        if($this->isAjax())
        {
            $this->loadView('filter', compact('projects', 'total', 'pagination', 'viewList', 'sortSelect'));
        }

        $this->setMeta('Проекты', 'Список проектов');
        $this->set(compact('projects', 'categories', 'pagination', 'viewList', 'sortSelect'));
    }
}