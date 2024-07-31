<?php

namespace app;

use controllers\HomeController;
use controllers\Task2\TaskTwoController;
use controllers\Task1\TaskOneController;
use controllers\Task3\CommentController;
use controllers\Task4\TaskFourController;

class Router{
    public function run(){
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        switch($page){
            case(''):
                $controller = new HomeController;
                $controller->index();
                break;
            case('task1'):
                $controller = new TaskOneController;
                $controller->index();
                break;
            case('task2'):
                $controller = new TaskTwoController;
                $controller->index();
                break;
            case('task3'):
                $controller = new CommentController;
                $controller->index();
                if(isset($_GET['action'])){
                    switch($_GET['action']){
                        case 'store':
                            $controller->store();  
                    }
                }
                break;
            case('task4'):
                $controller = new TaskFourController;
                $controller->index();
                break;
            default:
                http_response_code(404);
                break;
        }
    }
}

// class Router{
//     private $routes;

//     public function __construct()
//     {
//         $this->routes = [
//             '/^\/$/' => ['controller' => 'HomeController'],
//             '/^\/task1$/' => ['controller' => 'Task1\Task1Controller'],
//             '/^\/task2$/' => ['controller' => 'Task2\Task2Controller'],
//         ];
//     }

//     public function run(){
//         $uri = $_SERVER['REQUEST_URI'];
//         $controller = '';
//         $action = '';
//         $params = [];

//         foreach($this->routes as $pattern => $route){
//             if(preg_match($pattern,$uri,$matches)){
//                 $controller = 'controllers\\'.$route['controller'];
//                 $action = $matches['action'] ?? 'index';
//                 $params = array_filter($matches,'is_string',ARRAY_FILTER_USE_KEY);
//                 break;
//             }
//         }
        
//         if(!$controller){
//             http_response_code(404);
//             echo 'Controller not found';
//             return;
//         }

//         $controllerInstance = new $controller;

//         if(!method_exists($controllerInstance,$action)){
//             http_response_code(404);
//             echo "Method not found";
//             return;
//         }

//         call_user_func_array([$controllerInstance,$action],[$params]);
//     }
// }