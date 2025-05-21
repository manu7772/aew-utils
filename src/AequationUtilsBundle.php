<?php
namespace Aequation\UtilsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AequationUtilsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
