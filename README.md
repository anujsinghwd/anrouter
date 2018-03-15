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
```
    <?php
    
    require_once './AnRouter.php';
    
    $anrouter = new AnRouter();

    $anrouter->get('method name');
    $anrouter->post('method name');
    $anrouter->put('method name');
    $anrouter->delete('method name');

    function method_name()
    {
        echo "Method Called";
    }
    
```    
- Above route called by `(http://your_base_url/method_name)`

