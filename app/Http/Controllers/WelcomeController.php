<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        // https://github.com/artesaos/seotools#seotrait
        $this->seo()->setTitle('Welcome');

        return $this->render('welcome');
    }
}
