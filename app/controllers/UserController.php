<?php


namespace app\controllers;


use app\models\UserModel;

class   UserController extends AppController
{
    public function loginAction()
    {
        $client_id = "9500d45e-9790-470a-8d14-06c350f40a95";
        $ad_tenant = "19ba435d-e46c-436a-84f2-1b01e693e480";
        $client_secret = "m~3~c40iS7i1sugP6rG~SS_z.eUcZiE27s";
        $redirect_uri = PATH . "/login";
        $userdata = [];

        if(!empty($_SESSION['user']))
        {
            redirect();
        }
        else
        {
            if(!isset($_GET["code"]) and !isset($_GET["error"]))
            {
                $url = "https://login.microsoftonline.com/" . $ad_tenant . "/oauth2/v2.0/authorize?";
                $url .= "state=" . session_id();
                $url .= "&scope=User.Read";
                $url .= "&response_type=code";
                $url .= "&approval_prompt=auto";
                $url .= "&client_id=" . $client_id;
                $url .= "&redirect_uri=" . urlencode($redirect_uri);
                header("Location: " . $url);

            }
            elseif(strcmp(session_id(), $_GET["state"]) == 0)
            {
                $content = "grant_type=authorization_code";
                $content .= "&client_id=" . $client_id;
                $content .= "&redirect_uri=" . urlencode($redirect_uri);
                $content .= "&code=" . $_GET["code"];
                $content .= "&client_secret=" . urlencode($client_secret);

                $options = array(
                    "http" => array(
                        "method" => "POST",
                        "header" => "Content-Type: application/x-www-form-urlencoded\r\n" .
                            "Content-Length: " . strlen($content) . "\r\n",
                        "content" => $content
                    )
                );

                $context = stream_context_create($options);
                $json = file_get_contents("https://login.microsoftonline.com/" . $ad_tenant . "/oauth2/v2.0/token", false, $context);
                $authdata = json_decode($json, true);

                $options = array(
                    "http" => array(
                        "method" => "GET",
                        "header" => "Accept: application/json\r\n" .
                            "Authorization: Bearer " . $authdata["access_token"] . "\r\n"
                    )
                );

                $context = stream_context_create($options);
                $json = file_get_contents("https://graph.microsoft.com/v1.0/me", false, $context);
                $userdata = json_decode($json, true);

                $_SESSION['user'] = $userdata;

                if(!empty(\R::findOne('admins', 'mail = ?', array($_SESSION['user']['mail']))))
                {
                    $_SESSION['user']['admin'] = true;
                }
                else
                {
                    $_SESSION['user']['admin'] = false;
                }

                redirect(PATH . '/mentors');
            }
        }
    }

    public function logoutAction()
    {
        unset($_SESSION['user']);
        redirect();
    }

//    public function proictisAction()
//    {
//        if(!empty($_POST))
//        {
//            $var = \R::getAll('SELECT id FROM studentproject WHERE id=?', array($_SESSION['user']['id']));
//            if(!empty($var))
//            {
//                echo 'Вы уже авторизованы';
//            }
//            else
//            {
//                $student_project = \R::dispense('studentproject');
//                $student_project->project_id = $_POST['project'];
//                $student_project->student_id = $_SESSION['user']['id'];
//                \R::store($student_project);
//            }
//        }
//
//        $user = [
//            'id' => '1',
//            'course' => '1',
//            'name' => 'Пупкин Вася',
//        ];
//
//        $_SESSION['student'] = $user;
//
//        if(!empty($_SESSION['student']))
//        {
//         $projects = \R::getAll('SELECT * FROM project_title');
//
//         if($_SESSION['student']['course'] == '1')
//         {
//             $html = '<form action="user/proictis" method="post"><ul>';
//
//             foreach($projects as $project)
//             {
//                 $html .= '<li>'. $project['project'] . '<input name="project" value="' . $project['id'] . '" type="radio"></li>';
//             }
//
//             $html .= '</ul><button type="submit">Submit</button></form>';
//
//             echo $html;
//         }
//         else
//         {
//             echo 'Вы не на том курсе!';
//         }
//        }
//        else
//        {
//            echo 'Авторизуйтесь';
//        }
//    }
}