# anrouter
A simple and small PHP Routing


### Installation
- ```composer require anujsinghwd/anrouter```

### Usage

- First configure `.htaccess`
    ```jsx
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule . index.php [L]
   ```    
- ```$anrouter = new AnRouter()```

- Simply make function according to your route

### Example

- index.php File
    ```jsx 
    require_once './lib/AnRouter.php';
    
    $anrouter = new AnRouter();

    $anrouter->get('method_name'); -> For GET REQUEST
    $anrouter->post('method_name'); -> For POST REQUEST
    $anrouter->put('method_name'); -> For PUT REQUEST
    $anrouter->delete('method_name'); -> For DELETE REQUEST

    function method_name()
    {
        echo "Method Called";
    }
    ```    
- Above route called by `(http://your_base_url/method_name)`

### Parameter Handling

- Pass with request
    ```jsx
    $anrouter->get('method_name', array('agr1' => $val))
    ```
- Getting the Parameter in function
    ```jsx
    function method_name($param)
    {
        echo $param;
    }
   ``` 
