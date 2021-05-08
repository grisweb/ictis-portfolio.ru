<?php


namespace app\models;


class MentorModel extends AppModel
{
    static function getCategories($mentor_id): array
    {
        $categories_id = \R::getAll('SELECT category_id FROM category_mentor WHERE mentor_id = ?', array($mentor_id));

        $categories = [];

        foreach($categories_id as $category_id)
        {
            array_push($categories, \R::findOne('categories', 'id = ?', array($category_id['category_id'])));
        }

        return $categories;
    }
}