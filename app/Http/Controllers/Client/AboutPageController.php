<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\AboutPageService;
use App\Services\ThemeManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function __construct(
        protected AboutPageService $aboutPageService
    ) {}

    /**
     * Página principal "Sobre"
     */
    public function index(ThemeManager $theme)
    {
        $data = $this->aboutPageService->getAboutPageData();
        
        return view($theme->view('about'), $data->all());
    }

    /**
     * Filtro de relatórios (exemplo de endpoint adicional)
     */
    public function filterReports(Request $request): JsonResponse
    {
        try {
            $category = $request->get('category');
            $result = $this->aboutPageService->getFilteredReports($category);

            $html = view('client.ajax.filter-reports', [
                'reports' => $result['reports']
            ])->render();

            return response()->json([
                'success' => true,
                'html' => $html,
                'count' => $result['reports']->count(),
                'categories' => $result['categories']
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao filtrar relatórios: ' . $e->getMessage()
            ]);
        }
    }
}