# anrouter
A simple and small PHP Routing


### Installation

- Download the repo file or simply copy and paste

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

- `index.php`
    ```jsx 
    require_once './lib/AnRouter.php';
    
    $anrouter = new AnRouter();

    $anrouter->get('method name'); -> For GET REQUEST
    $anrouter->post('method name'); -> For POST REQUEST
    $anrouter->put('method name'); -> For PUT REQUEST
    $anrouter->delete('method name'); -> For DELETE REQUEST

    function method_name()
    {
        echo "Method Called";
    }
    ```    
- Above route called by `(http://your_base_url/method_name)`

