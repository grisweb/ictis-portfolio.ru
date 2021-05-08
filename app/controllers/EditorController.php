<?php


namespace app\controllers;


class EditorController extends AppController
{
    public function indexAction()
    {
        if(isset($_POST['content']))
        {
            $file = $_POST['content'];
            $fp = fopen("file.txt", "w");
            fwrite($fp, $file);
            fclose($fp);
            echo 'good';
        }
    }
}