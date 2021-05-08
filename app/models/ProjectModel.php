<?php


namespace app\models;


class ProjectModel extends AppModel
{
    static function getCategories($project_id): array
    {
        $id_categories = \R::getAll('SELECT id_category FROM category_project WHERE id_project = ?', array($project_id));

        $categories = [];

        foreach ($id_categories as $id_category)
        {
            array_push($categories, \R::findOne('categories', 'id = ?', array($id_category['id_category'])));
        }

        return $categories;
    }
}