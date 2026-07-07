<?php

namespace App\Services;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\DTOs\AboutPageData;
use App\Models\Contact;
use App\Models\Report;
use App\Models\Statute;

class AboutPageService
{
    public function __construct(
        protected AboutRepositoryInterface $aboutRepository
    ) {}

    /**
     * Obtém todos os dados necessários para a página "Sobre"
     */
    public function getAboutPageData(): AboutPageData
    {
        $data = [
            'about' => $this->aboutRepository->getAbout(),
            'topics' => $this->aboutRepository->getTopics(),
            'benefitTopics' => $this->aboutRepository->getBenefitTopics(),
            'partners' => $this->aboutRepository->getPartners(),
            'directions' => $this->aboutRepository->getDirections(),
            'video' => $this->aboutRepository->getVideo(),
            'reports' => $this->aboutRepository->getReports(),
            'serviceLocation' => $this->aboutRepository->getServiceLocation(),
            'contact' => Contact::first(),
            'statute' => Statute::active()->first(),
        ];

        return new AboutPageData($data);
    }

    /**
     * Busca dados específicos se necessário (ex: para filtros)
     */
    public function getFilteredReports(?string $category = null): array
    {
        $query = Report::active();

        if ($category) {
            $query->where('category', $category);
        }

        return [
            'reports' => $query->get(),
            'categories' => Report::select('category')
                ->distinct()
                ->whereNotNull('category')
                ->pluck('category')
                ->toArray()
        ];
    }
}