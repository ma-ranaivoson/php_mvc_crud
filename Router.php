<?php

namespace app;

use app\Database;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function get(string $url, array $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post(string $url, array $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if($method === 'GET'){
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if($fn){
            call_user_func($fn, $this);
        } else {
            echo "Page not found";
        }
    }

    public function renderView($view, array $params = [])
    { 
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();
        include_once __DIR__."/views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__."/views/layout.php";
    }
}
