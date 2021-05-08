<?php


namespace app\controllers;


use app\models\MentorModel;

class MentorsController extends AppController
{
    public function indexAction()
    {
        $mentors = \R::findAll('mentors');

        $this->setMeta('Наставники', 'Список наставников');
        $this->set(compact('mentors'));
    }
}