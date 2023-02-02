<?php
namespace App;
use App\Controllers\Login;

class Routing
{

    public static function getURI() {
        // Routing.
        $request = $_SERVER['REQUEST_URI'];
         switch ($request) {
             case '/':
                 return 'index.twig';
                 break;
             case '/login':
                return 'admin/index.twig';
                 break;
             case '/signin':
                 Login::checkAcount($_POST);
                 break;
             case '/admin':
                 return 'admin/page/index.twig';
                 break;
             default:
                 return 'public/page/404.twig';
                 break;
         }

    }

}


