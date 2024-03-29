<?php
namespace RindowTest\Math\Matrix\Drivers\MatlibExt\ReleaseTest;

use PHPUnit\Framework\TestCase;
use Rindow\Math\Matrix\Drivers\Service;
use Rindow\Math\Matrix\Drivers\MatlibExt\MatlibExt;
use Rindow\OpenBLAS\Blas;

class ReleaseTest extends TestCase
{
    public function testForRelease()
    {
        $service = new MatlibExt();
        if(extension_loaded('rindow_openblas')) {
            $blas = $service->Blas();
            $this->assertInstanceof(Blas::class,$blas);
        } else {
            $this->assertEquals(Service::LV_BASIC,$service->serviceLevel());
        }
    }
}