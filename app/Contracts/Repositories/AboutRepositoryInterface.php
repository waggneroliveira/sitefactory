<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface AboutRepositoryInterface
{
    public function getAbout(): ?object;
    public function getTopics(): Collection;
    public function getBenefitTopics(): Collection;
    public function getPartners(): Collection;
    public function getDirections(): Collection;
    public function getVideo(): ?object;
    public function getReports(): Collection;
    public function getServiceLocation(): ?object;
}