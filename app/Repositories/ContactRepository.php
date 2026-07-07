<?php

namespace App\Repositories;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * Obtém as informações de contato
     */
    public function getContact(): ?Model
    {
        return Contact::first();
    }

    /**
     * Obtém as informações de contato com relacionamentos (se houver)
     */
    public function getContactWithSocialMedia(): ?Model
    {
        return Contact::first();
    }

    /**
     * Obtém as informações de contato em formato de array
     */
    public function getContactInfo(): array
    {
        $contact = $this->getContact();
        
        if (!$contact) {
            return [
                'phone' => null,
                'email' => null,
                'address' => null,
                'whatsapp' => null,
                'social_medias' => [],
            ];
        }

        return [
            'phone' => $contact->phone ?? null,
            'email' => $contact->email ?? null,
            'address' => $contact->address ?? null,
            'whatsapp' => $contact->whatsapp ?? null,
            'social_medias' => $contact->socialMedias ?? [],
        ];
    }
}