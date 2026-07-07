<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ProductPageService;
use App\Services\ThemeManager;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function __construct(
        protected ProductPageService $productPageService
    ) {}

    /**
     * Página de listagem de produtos
     */
    public function productAll(ThemeManager $theme, Request $request)
    {
        $category = $request->get('category');
        $brand = $request->get('brand');
        $search = $request->get('search');

        // Se for requisição AJAX
        if ($request->ajax()) {
            $result = $this->productPageService->processAjaxFilters(
                $category,
                $brand,
                $search,
                $theme->viewIncludes('products')
            );

            return response()->json([
                'html' => $result['html'],
                'title' => $result['title'],
                'count' => $result['count']
            ]);
        }

        // Requisição normal
        $data = $this->productPageService->getProductPageData($category, $brand, $search);

        return view($theme->view('products'), $data->all());
    }

    /**
     * Página de visualização de um produto específico
     */
    public function productView(ThemeManager $theme, $category = null, $slug = null)
    {
        if (!$category || !$slug) {
            return view('client.errors.404');
        }

        // Verifica se o produto existe
        if (!$this->productPageService->productExists($category, $slug)) {
            return view('client.errors.404');
        }

        $data = $this->productPageService->getProductViewData($category, $slug);

        // Verifica se houve erro
        if ($data->hasError()) {
            return view('client.errors.404');
        }

        return view($theme->view('product'), $data->all());
    }
}