<?php
    /*
     * App Core class
     */
    
class AnRouter 
{
    private $url;

    public function __construct()
    {
        $base_url = $this->getCurrentUri();
        //$this->req = $this->getRequest();
        $routes = array();
        $routes = explode('/', $base_url);
        foreach($routes as $route)
        {
            if(trim($route) != '')
                array_push($routes, $route);
        }
        $this->url = $route;
    }
    
    /*
     * @return current url
    */
    public function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');
        return $uri;
    }   

    /*
     * accept GET request
    */
    public function get($r)
    {
        $this->methodCheck('GET', $r);
    }

    /*
     * accept POST request
    */
    public function post($r)
    {
        $this->methodCheck('POST', $r);
    }

    /*
     * accept PUT request
    */
    public function put($r)
    {
        $this->methodCheck('PUT', $r);
    }

    /*
     * accept DELETE request
    */
    public function delete($r)
    {
        $this->methodCheck('DELETE', $r);
    }

    public function route($r)
    {
        if($r == $this->url)
        {
            if (function_exists($r)) 
            {
                call_user_func_array($this->url, $_REQUEST);
            }
            else
            {
                echo json_encode(['status' => 'error', 'code' => 404, 'msg' => 'The requested ROUTE Function was not found'], JSON_UNESCAPED_UNICODE);
            }
        }
        else
        {
            header('HTTP/1.0 404 Not Found');
            echo json_encode(['status' => 'error', 'code' => 404, 'msg' => 'The requested URL was not found on this server'], JSON_UNESCAPED_UNICODE);
        }
    }

    public function methodCheck($type, $r)
    {
        if($type == $_SERVER['REQUEST_METHOD'])
        {
            $this->route($r);
        }
        else
        {
            header('HTTP/1.0 404 Not Found');
        }
    }

}  
     