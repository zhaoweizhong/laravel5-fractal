<?php

namespace Zhaoweizhong\Laravel5Fractal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Fractal.
 */
class Fractal extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fractal';
    }
}
