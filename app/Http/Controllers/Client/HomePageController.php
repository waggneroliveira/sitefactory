<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\HomePageService;
use App\Services\ThemeManager;
use Illuminate\Http\JsonResponse;

class HomePageController extends Controller
{
    public function __construct(
        protected HomePageService $homePageService
    ) {}

    public function index(ThemeManager $theme)
    {
        $data = $this->homePageService->getHomePageData();
        
        return view($theme->view('index'), $data->all());
    }

    // public function filterByCategory(?string $categorySlug = null): JsonResponse
    // {
    //     try {
    //         $allNews = $this->homePageService->filterNewsByCategory($categorySlug);
            
    //         $html = view('client.ajax.filter-blog-homePage', [
    //             'latestNews' => $allNews
    //         ])->render();

    //         return response()->json([
    //             'success' => true,
    //             'html' => $html,
    //             'count' => $allNews->count()
    //         ]);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Erro ao filtrar notícias: ' . $e->getMessage()
    //         ]);
    //     }
    // }
}