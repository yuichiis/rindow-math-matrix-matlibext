<?php
namespace Rindow\Math\Matrix\Drivers\MatlibExt;

use Rindow\Math\Matrix\Drivers\MatlibCL\MatlibCLFactory;
use Rindow\Math\Matrix\Drivers\AbstractMatlibService;

class MatlibExt extends AbstractMatlibService
{
    protected $name = 'matlib_ext';
    
    public function __construct(
        object $bufferFactory=null,
        object $mathFactory=null,
        object $openblasFactory=null,
        object $openclFactory=null,
        object $clblastFactory=null,
        object $blasCLFactory=null,
        object $mathCLFactory=null,
        object $bufferCLFactory=null,
    )
    {
        $openblasFactory = $openblasFactory ?? new OpenBLASFactory();
        $bufferFactory = $bufferFactory ?? $openblasFactory;
        $mathFactory = $mathFactory ?? $openblasFactory;

        $openclFactory = $openclFactory ?? new OpenCLFactory();
        $bufferCLFactory = $bufferCLFactory ?? $openclFactory;

        $clblastFactory = $clblastFactory ?? new CLBlastFactory();
        $blasCLFactory = $blasCLFactory ?? $clblastFactory;

        $mathCLFactory = $mathCLFactory ?? new MatlibCLFactory();

        parent::__construct(
            bufferFactory:$bufferFactory,
            openblasFactory:$openblasFactory,
            mathFactory:$mathFactory,
            openclFactory:$openclFactory,
            clblastFactory:$clblastFactory,
            blasCLFactory:$blasCLFactory,
            mathCLFactory:$mathCLFactory,
            bufferCLFactory:$bufferCLFactory,
        );
    }
}