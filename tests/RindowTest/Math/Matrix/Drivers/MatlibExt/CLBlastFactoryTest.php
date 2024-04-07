<?php
namespace RindowTest\Math\Matrix\Drivers\MatlibExt\CLBlastFactoryTest;

use PHPUnit\Framework\TestCase;
use Rindow\Math\Matrix\Drivers\MatlibExt\CLBlastFactory;
use Rindow\Math\Matrix\Drivers\Service;
use Rindow\CLBlast\Blas;
use Rindow\CLBlast\Math;
use Interop\Polite\Math\Matrix\NDArray;

/**
 * @requires extension rindow_clblast
 */
class CLBlastFactoryTest extends TestCase
{
    protected $service;
    protected $queue;
    
    public function setUp() : void
    {
        $this->queue = new \stdClass();
        $this->service = new class implements Service {
            public function serviceLevel() : int {}
            public function info() : string {}
            public function name() : string {}
            public function blas(int $level=null) : object {}
            public function lapack(int $level=null) : object {}
            public function math(int $level=null) : object {}
            public function buffer(int $level=null) : object {}
            public function openCL() : object {}
            public function blasCL(object $queue) : object {}
            public function mathCL(object $queue) : object {}
            public function mathCLBlast(object $queue) : object {}
            /**
             * @param array<string,mixed> $options
             */
            public function createQueue(array $options=null) : object {}
        };
    }

    public function newDriverFactory()
    {
        return new CLBlastFactory();
    }

    public function testName()
    {
        $factory = $this->newDriverFactory();
        $this->assertEquals('rindow_clblast',$factory->name());
    }

    public function testIsAvailable()
    {
        $factory = $this->newDriverFactory();
        $this->assertTrue($factory->isAvailable());
    }

    public function testExtName()
    {
        $factory = $this->newDriverFactory();
        $this->assertEquals('rindow_clblast',$factory->extName());
    }

    public function testVersion()
    {
        $factory = $this->newDriverFactory();
        $this->assertTrue(is_string($factory->version()));
        //var_dump($factory->version());
    }

    public function testBlas()
    {
        $factory = $this->newDriverFactory();
        $driver = $factory->Blas($this->queue,$this->service);
        $this->assertInstanceOf(Blas::class,$driver);
    }

    public function testMath()
    {
        $factory = $this->newDriverFactory();
        $driver = $factory->Math($this->queue,$this->service);
        $this->assertInstanceOf(Math::class,$driver);
    }

}
