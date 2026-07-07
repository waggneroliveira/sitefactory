<?php

namespace App\Services;

use App\Contracts\Repositories\{
    ProductRepositoryInterface,
    BrandRepositoryInterface
};
use App\DTOs\ProductPageData;
use App\DTOs\ProductViewData;
use App\Models\Contact;
use App\Models\ProductCategory;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductPageService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository,
        protected BrandRepositoryInterface $brandRepository
    ) {}

    /**
     * Obtém todos os dados para a página de listagem de produtos
     */
    public function getProductPageData(
        ?string $category = null,
        ?string $brand = null,
        ?string $search = null
    ): ProductPageData {
        // Buscar produtos com filtros
        $products = $this->productRepository->getProductsWithFilters(
            $category,
            $brand,
            $search
        );

        // Buscar categorias disponíveis
        $productCategories = $this->productRepository->getProductCategories();

        // Buscar marcas disponíveis
        $brands = $this->productRepository->getBrands();

        // Determinar o título da página
        $title = $this->determineTitle($category, $brand, $products);
        $activeCategory = null;
        $activeBrand = null;

        if ($category && $category !== 'all') {
            $activeCategory = ProductCategory::active()->where('slug', $category)->first();
        }

        if ($brand && $brand !== 'all') {
            $activeBrand = Brand::active()->where('slug', $brand)->first();
        }

        // Buscar contato
        $contact = Contact::first();

        return new ProductPageData([
            'products' => $products,
            'productCategories' => $productCategories,
            'brands' => $brands,
            'title' => $title,
            'contact' => $contact,
            'activeCategory' => $activeCategory,
            'activeBrand' => $activeBrand,
            'categorySlug' => $category,
            'brandSlug' => $brand,
            'searchTerm' => $search,
        ]);
    }

    /**
     * Determina o título da página baseado nos filtros
     */
    private function determineTitle(?string $category, ?string $brand, $products): string
    {
        // Se não houver produtos, retorna mensagem
        if ($products->isEmpty()) {
            return 'Nenhum produto encontrado';
        }

        // Caso específico: categoria e marca
        if ($category && $category !== 'all' && $brand && $brand !== 'all') {
            $categoryModel = ProductCategory::active()->where('slug', $category)->first();
            $brandModel = Brand::active()->where('slug', $brand)->first();

            if ($categoryModel && $brandModel) {
                return "{$categoryModel->title} - {$brandModel->title}";
            }
            return 'Produtos';
        }

        // Apenas categoria
        if ($category && $category !== 'all') {
            $categoryModel = ProductCategory::active()->where('slug', $category)->first();
            if ($categoryModel) {
                return $categoryModel->title;
            }
            return 'Produtos';
        }

        // Apenas marca
        if ($brand && $brand !== 'all') {
            $brandModel = Brand::active()->where('slug', $brand)->first();
            if ($brandModel) {
                return $brandModel->title;
            }
            return 'Produtos';
        }

        // Busca
        if ($search = request()->get('search')) {
            return "Resultados para: {$search}";
        }

        return 'Todos os Produtos';
    }

    /**
     * Obtém os dados para a visualização de um produto específico
     */
    public function getProductViewData(string $category, string $slug): ProductViewData
    {
        // Buscar o produto pelo slug e categoria
        $product = $this->productRepository->getProductByCategoryAndSlug($category, $slug);

        if (!$product) {
            return new ProductViewData(['error' => 'Produto não encontrado']);
        }

        // Buscar contato
        $contact = Contact::first();

        return new ProductViewData([
            'product' => $product,
            'contact' => $contact,
            'category' => $category,
            'slug' => $slug,
        ]);
    }

    /**
     * Verifica se um produto existe
     */
    public function productExists(string $category, string $slug): bool
    {
        return !is_null($this->productRepository->getProductByCategoryAndSlug($category, $slug));
    }

    /**
     * Processa requisição AJAX para filtros
     */
    public function processAjaxFilters(
        ?string $category = null,
        ?string $brand = null,
        ?string $search = null,
        string $themeView
    ): array {
        $products = $this->productRepository->getProductsWithFilters(
            $category,
            $brand,
            $search
        );

        $title = $this->determineTitle($category, $brand, $products);

        return [
            'html' => view($themeView, compact('products', 'title'))->render(),
            'title' => $title,
            'count' => $products->count()
        ];
    }
}