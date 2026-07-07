<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface AnnouncementRepositoryInterface
{
    public function getHorizontal(): Collection;
    public function getVertical(): Collection;
    public function getMobile(): Collection;
    public function getAll(): Collection;
}