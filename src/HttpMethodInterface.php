<?php
namespace MrfExpressive\HttpMethod;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface HttpMethodInterface
 * @package MrfExpressive
 *
 * Define methods we'd expect there to be if using the trait
 */
interface HttpMethodInterface
{
    /**
     * For GET method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function get(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);

    /**
     * For POST method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function post(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);

    /**
     * For DELETE method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function delete(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);

    /**
     * For PATCH method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function patch(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);

    /**
     * For PUT method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function put(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);

    /**
     * For HEAD method
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return mixed
     */
    public function head(ServerRequestInterface $request, ResponseInterface $response, callable $next = null);
}