<?php

namespace App\Repositories;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Models\About;
use App\Models\BenefitTopic;
use App\Models\Direction;
use App\Models\Partner;
use App\Models\Report;
use App\Models\ServiceLocation;
use App\Models\Topic;
use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;

class AboutRepository implements AboutRepositoryInterface
{
    /**
     * Obtém as informações da página "Sobre"
     */
    public function getAbout(): ?object
    {
        return About::active()->first();
    }

    /**
     * Obtém os tópicos ativos
     */
    public function getTopics(): Collection
    {
        return Topic::active()->sorting()->get();
    }

    /**
     * Obtém os tópicos de benefícios ativos
     */
    public function getBenefitTopics(): Collection
    {
        return BenefitTopic::active()->sorting()->get();
    }

    /**
     * Obtém os parceiros ativos
     */
    public function getPartners(): Collection
    {
        return Partner::active()->sorting()->get();
    }

    /**
     * Obtém as diretorias ativas
     */
    public function getDirections(): Collection
    {
        return Direction::active()->sorting()->get();
    }

    /**
     * Obtém o primeiro vídeo ativo
     */
    public function getVideo(): ?object
    {
        return Video::active()->first();
    }

    /**
     * Obtém os relatórios ativos
     */
    public function getReports(): Collection
    {
        return Report::active()->get();
    }

    /**
     * Obtém a localização do serviço ativa
     */
    public function getServiceLocation(): ?object
    {
        return ServiceLocation::active()->first();
    }
}