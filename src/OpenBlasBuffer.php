<?php
namespace Rindow\Math\Matrix\Drivers\MatlibExt;

use Rindow\OpenBLAS\Buffer as BufferImplement;
use Interop\Polite\Math\Matrix\LinearBuffer;

class OpenBlasBuffer extends BufferImplement implements LinearBuffer
{
}
