<?php

namespace TunisiaMall\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TunisiaMallUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
