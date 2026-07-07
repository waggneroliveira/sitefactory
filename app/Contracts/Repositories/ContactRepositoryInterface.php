<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Model;

interface ContactRepositoryInterface
{
    public function getContact(): ?Model;
    public function getContactWithSocialMedia(): ?Model;
    public function getContactInfo(): array;
}