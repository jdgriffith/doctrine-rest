<?php

namespace Oodle\KrumoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OodleKrumoBundle
    extends Bundle
{
    public function __construct()
    {
        require_once(__DIR__ . '/../../../krumo/class.krumo.php');
    }
}
