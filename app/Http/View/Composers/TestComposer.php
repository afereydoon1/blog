<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class TestComposer
{
    public function compose(View $view)
    {
        $view->with('count',10);
    }
}
