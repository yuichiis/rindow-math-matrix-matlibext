<?php
namespace Rindow\Math\Matrix\Drivers\MatlibExt;

use Rindow\Math\Matrix\Drivers\MatlibCL\MatlibCLFactory;
use Rindow\Math\Matrix\Drivers\AbstractMatlibService;

class MatlibExt extends AbstractMatlibService
{
    protected string $name = 'matlib_ext';
    
    protected function injectDefaultFactories() : void
    {
        $this->openblasFactory ??= new OpenBLASFactory();
        $this->bufferFactory ??= $this->openblasFactory;
        $this->mathFactory ??= $this->openblasFactory;

        $this->openclFactory ??= new OpenCLFactory();
        $this->bufferCLFactory ??= $this->openclFactory;

        $this->clblastFactory ??= new CLBlastFactory();
        $this->blasCLFactory ??= $this->clblastFactory;

        $this->mathCLFactory ??= new MatlibCLFactory();
    }
}