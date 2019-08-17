<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, SEOToolsTrait;

    /**
     * @param  string  $page
     * @return \Inertia\Response
     */
    public function render(string $page): Response
    {
        $vuePage = collect(explode('.', $page))->map(function ($page) {
            return Str::studly($page);
        })->implode(DIRECTORY_SEPARATOR);

        $seoData = $this->seoData();

        return Inertia::render($vuePage)
            ->with('seo', $seoData) // used by Layout.vue
            ->withViewData('seo', $seoData) // used by app.blade.php
            ->withViewData('noscript', 'noscripts.'.$page);
    }

    protected function seoData(): array
    {
        // TODO - extract SEO data
        return [];
    }
}
