<?php

namespace App\Services;

use App\Contracts\Repositories\{
    BlogRepositoryInterface,
    ProductRepositoryInterface,
    AnnouncementRepositoryInterface
};
use App\DTOs\HomePageData;
use App\Models\About;
use App\Models\BenefitTopic;
use App\Models\Contact;
use App\Models\Depoiment;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Letsgo;
use App\Models\PopUp;
use App\Models\SessaoFaq;
use App\Models\Slide;
use App\Models\Statute;
use App\Models\Topic;
use App\Models\Video;
use App\Models\BlogCategory;
use Carbon\Carbon;

class HomePageService
{
    public function __construct(
        protected BlogRepositoryInterface $blogRepository,
        protected ProductRepositoryInterface $productRepository,
        protected AnnouncementRepositoryInterface $announcementRepository
    ) {}

    public function getHomePageData(): HomePageData
    {

        $cacheKey = 'home_page_data_' . app()->getLocale();
            
        // Pegar dados estáticos/infraestruturais
        $staticData = $this->getStaticData();
        
        // Pegar dados dinâmicos via repositories
        $blogData = $this->getBlogData();
        $productData = $this->getProductData();
        $announcementData = $this->getAnnouncementData();
        $additionalData = $this->getAdditionalData();

        return new HomePageData(
            array_merge(
                $staticData,
                $blogData,
                $productData,
                $announcementData,
                $additionalData
            )
        );
    }

    private function getStaticData(): array
    {
        return [
            'about' => About::active()->first(),
            'slides' => Slide::active()->sorting()->get(),
            'topics' => Topic::active()->sorting()->get(),
            'benefitTopics' => BenefitTopic::active()->sorting()->get(),
            'videos' => Video::active()->sorting()->get(),
            'letsgo' => Letsgo::active()->first(),
            'depoiments' => Depoiment::active()->sorting()->get(),
            'contact' => Contact::first(),
            'statute' => Statute::active()->first(),
            'faqs' => Faq::active()->sorting()->get(),
            'sessaoFaq' => SessaoFaq::active()->first(),
            'popUp' => PopUp::active()->first(),
            'events' => Event::active()
                ->whereMonth('date', now()->month)
                ->orderBy('date', 'asc')
                ->get(),
        ];
    }

    private function getBlogData(): array
    {
        $recentCategories = BlogCategory::whereHas('blogs', fn($q) => 
                $q->active()->whereHas('category', fn($c) => $c->where('active', 1))
            )
            ->withCount(['blogs' => fn($q) => $q->active()])
            ->where('active', 1)
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        $blogCategories = BlogCategory::whereHas('blogs')
            ->active()
            ->sorting()
            ->get();

        $blogNoBairros = $this->blogRepository->getCategoryNews(1, 10);

        return [
            'blogSuperHighlights' => $this->blogRepository->getSuperHighlights(),
            'blogHighlights' => $this->blogRepository->getHighlights(),
            'latestNews' => $this->blogRepository->getLatestNews(10),
            'recentCategories' => $recentCategories,
            'blogRelacionados' => $this->blogRepository->getRelatedNews(
                $recentCategories->pluck('id')->toArray(),
                10
            ),
            'blogCategories' => $blogCategories,
            'blogNoBairros' => $blogNoBairros,
        ];
    }

    private function getProductData(): array
    {
        return [
            'productCategorieHighlights' => $this->productRepository->getHighlightCategories(3),
            'productCategories' => $this->productRepository->getAllCategories(4),
            'products' => $this->productRepository->getProducts(16),
        ];
    }

    private function getAnnouncementData(): array
    {
        return [
            'announcements' => $this->announcementRepository->getHorizontal(),
            'announcementVerticals' => $this->announcementRepository->getVertical(),
        ];
    }

    private function getAdditionalData(): array
    {
        return [];
    }
    
}