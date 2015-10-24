Expressive Method
====

Small utility that routes to methods named after HTTP verbs to help make API development easier. 

## Installation

Using composer!

```bash
composer install mrferos/expressive-method
```

## Usage

Example action: 
```php
<?php
namespace App\Action;

use MrfExpressive\HttpMethodTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AcmeAction
{
    use HttpMethodTrait;
    
    /**
     * For GET method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function get(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        // Do anything here you normally would!
    }
}
```

That's it!

There is also an interface `MrfExpressive\HttpMethodInterface` that defines methods for all the HTTP verbs. 