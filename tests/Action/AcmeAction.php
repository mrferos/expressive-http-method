<?php
namespace MrfExpressive\Test\Action;

use MrfExpressive\HttpMethodInterface;
use MrfExpressive\HttpMethodTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AcmeAction implements HttpMethodInterface
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
        return __FUNCTION__;
    }

    /**
     * For POST method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function post(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return __FUNCTION__;
    }

    /**
     * For DELETE method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function delete(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return __FUNCTION__;
    }

    /**
     * For PATCH method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function patch(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return __FUNCTION__;
    }

    /**
     * For PUT method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function put(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return __FUNCTION__;
    }

    /**
     * For HEAD method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function head(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return __FUNCTION__;
    }


}