<?php

/*
 * This file is part of the jiannei/layadmin.
 *
 * (c) jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jiannei\LayAdmin\Http\Middleware;

use Illuminate\Support\Facades\View;
use Jiannei\LayAdmin\Support\Facades\LayAdmin;

class Bootstrap
{
    public function handle($request, \Closure $next)
    {
        $layadmin = LayAdmin::bootstrap();

        View::share('layadmin', $layadmin);

        return $next($request);
    }
}
