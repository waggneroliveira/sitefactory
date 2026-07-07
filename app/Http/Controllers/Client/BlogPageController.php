<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\BlogPageService;
use App\Services\ThemeManager;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function __construct(
        protected BlogPageService $blogPageService
    ) {}

    /**
     * Página principal do Blog
     */
    public function index(ThemeManager $theme, Request $request, $category = null)
    {
        $search = $request->input('search');
        
        $data = $this->blogPageService->getBlogPageData($category, $search);
        
        return view($theme->view('blog'), $data->all());
    }

    /**
     * Página interna do Blog (detalhe do post)
     */
    public function blogInner(ThemeManager $theme, $slug = null)
    {
        if (!$slug) {
            return view('client.errors.404');
        }

        // Verifica se o post existe
        if (!$this->blogPageService->blogExists($slug)) {
            return view('client.errors.404');
        }

        $data = $this->blogPageService->getBlogInnerPageData($slug);
        
        // Compartilha a variável globalmente (para menu/header)
        view()->share('blogInner', $data->blogInner);

        return view($theme->view('blog-inner'), $data->all());
    }
}