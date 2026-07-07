<?php

namespace App\Repositories;

use App\Contracts\Repositories\AnnouncementRepositoryInterface;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Collection;

class AnnouncementRepository implements AnnouncementRepositoryInterface
{
    public function getHorizontal(): Collection
    {
        return Announcement::select(
                'exhibition',
                'link',
                'path_image',
                'active',
                'sorting',
            )
            ->where('exhibition', '=', 'horizontal')
            ->active()
            ->sorting()
            ->get();
    }

    public function getVertical(): Collection
    {
        return Announcement::select(
                'exhibition',
                'link',
                'path_image',
                'active',
                'sorting',
            )
            ->where('exhibition', '=', 'vertical')
            ->active()
            ->sorting()
            ->get();
    }

    public function getMobile(): Collection
    {
        return Announcement::select(
                'exhibition',
                'link',
                'path_image',
                'active',
                'sorting',
            )
            ->where('exhibition', '=', 'mobile')
            ->active()
            ->sorting()
            ->get();
    }

    public function getAll(): Collection
    {
        return Announcement::select(
                'exhibition',
                'link',
                'path_image',
                'active',
                'sorting',
            )
            ->active()
            ->sorting()
            ->get();
    }
}