<?php


class Route {

    private function simpleRoute($file, $route, $title,$middlewares = []){
        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route){
            //Layout
            $this->checkMiddleware($middlewares);
            $params = [];
            $title = $title;
            $childView = 'pages/'.$file;
            include('pages/layouts/app.php');
            exit();
        }

    }

    static function checkMiddleware($middlewares){
        if(!empty($middlewares)){
            foreach ($middlewares as $item){
                if($item == 'guest'){
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
                        header("location: ".Route::getRoute('/'));
                        exit;
                    }
                }
                elseif($item == 'auth'){
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    if(!isset($_SESSION["logged_in"])){
                        header("location: ".Route::getRoute('/'));
                        exit;
                    }
                }
            }
        }
    }
    static function getRoute($route){
        return str_replace("\\","/",BASE_URL.$route);
    }

    static function currentRoute(){
        $pageURL = 'http://';
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .=
                $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else {
            $pageURL .= $_SERVER["SERVER_NAME"].strtok($_SERVER["REQUEST_URI"], '?');
        }
        return $pageURL;
    }

    static function is_route($route){
        $currentRoute = Route::currentRoute();
        return ($currentRoute == Route::getRoute($route)) ? true : false;
    }
    function add($route,$file, $title,$middlewares = []){

        $params = [];
        $paramKey = [];

        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        if(empty($paramMatches[0])){
            $this->simpleRoute($file,$route,$title,$middlewares);
            return;
        }

        foreach($paramMatches[0] as $key){
            $paramKey[] = $key;
        }

        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        $uri = explode("/", $route);
        $indexNum = [];

        foreach($uri as $index => $param){
            if(preg_match("/{.*}/", $param)){
                $indexNum[] = $index;
            }
        }

        $reqUri = explode("/", $reqUri);

        foreach($indexNum as $key => $index){
            if(empty($reqUri[$index])){
                return;
            }
            $params[$paramKey[$key]] = $reqUri[$index];
            $reqUri[$index] = "{.*}";
        }

        $reqUri = implode("/",$reqUri);
        $reqUri = str_replace("/", '\\/', $reqUri);
        if(preg_match("/$reqUri/", $route))
        {
            //Layout
            $childView = 'pages/'.$file;
            $title = $title;
            include('pages/layouts/app.php');
            exit();

        }
    }

    function notFound($file,$title){
        $childView = 'pages/'.$file;
        $title = $title;
        include('pages/layouts/app.php');
        exit();
    }
}

?>