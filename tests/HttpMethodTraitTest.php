<?php
namespace MrfExpressive\Test;

use MrfExpressive\HttpMethod\MethodNotImplementedException;
use MrfExpressive\HttpMethod\Test\Action\AcmeAction;
use MrfExpressive\HttpMethod\Test\Action\AcmeMethodNotImplemented;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HttpMethodTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getMethods
     */
    public function testHttpMethod($method, $outcome)
    {
        $acme     = new AcmeAction();
        $request  = $this->getMock(ServerRequestInterface::class);
        $response = $this->getMock(ResponseInterface::class);

        $request->expects($this->once())
                ->method('getMethod')
                ->willReturn($method);

        $this->assertEquals(
            $outcome,
            $acme($request, $response)
        );
    }

    public function testMethodNotDefined()
    {
        $this->setExpectedException(MethodNotImplementedException::class);

        $acme     = new AcmeMethodNotImplemented();
        $request  = $this->getMock(ServerRequestInterface::class);
        $response = $this->getMock(ResponseInterface::class);

        $request->expects($this->once())
            ->method('getMethod')
            ->willReturn('GET');


        $acme($request, $response);
    }

    public function getMethods()
    {
        return [
            ['GET', 'get'],
            ['POST', 'post'],
            ['DELETE', 'delete'],
            ['HEAD', 'head'],
            ['PUT', 'put'],
            ['PATCH', 'patch'],
        ];
    }
}