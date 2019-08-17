<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function __invoke()
    {
        $this->seo()->setTitle('About');

        return $this->render('about');
    }
}
