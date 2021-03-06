<?php

/*
 * This file is part of the jiannei/layadmin.
 *
 * (c) jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jiannei\LayAdmin\Support\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * @method static string version()
 * @method static bool isAdminRoute(string $path)
 * @method static array bootstrap()
 * @method static array getPageConfig(string|null $path = null)
 * @method static \Closure view()
 *
 * @see \Jiannei\LayAdmin\LayAdmin
 */
class LayAdmin extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return \Jiannei\LayAdmin\LayAdmin::class;
    }
}
