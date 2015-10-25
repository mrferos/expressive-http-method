<?php
namespace MrfExpressive\HttpMethod;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class HttpMethod
 * @package MrfExpressive
 *
 * Provide an easy to use trait to pipe methods to ones named after
 * related HTTP ones.
 */
trait HttpMethodTrait
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $method = $request->getMethod();
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], func_get_args());
        }

        throw new MethodNotImplementedException($method);
    }
}