<?php


namespace app\controllers;


use app\models\MentorModel;

class MentorController extends AppController
{
    public function viewAction()
    {
        $id = $this->route['id'];
        $mentor = \R::findOne('mentors', 'id = ?', [$id]);

        if(!$mentor)
        {
            throw new \Exception('Страница не найдена!', 404);
        }

        $mentor['categories'] = MentorModel::getCategories($mentor['id']);

        $mentor['mail'] = \R::findAll('mail', 'mentor_id = ?', [$mentor['id']]);
        $mentor['contacts'] = \R::findAll('contacts', 'mentor_id = ?', [$mentor['id']]);

        $this->setMeta($mentor['surname'] . ' ' . $mentor['name'] . ' ' . $mentor['patronymic'], '', '');
        $this->set(compact('mentor'));
    }
}