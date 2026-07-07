<?php

namespace App\DTOs;

class ContactPageData
{
    private array $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    public function get(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    // Métodos específicos
    public function hasContact(): bool
    {
        return isset($this->data['contact']) && !is_null($this->data['contact']);
    }

    public function getPhone(): ?string
    {
        return $this->hasContact() ? $this->contact->phone : null;
    }

    public function getEmail(): ?string
    {
        return $this->hasContact() ? $this->contact->email : null;
    }

    public function getAddress(): ?string
    {
        return $this->hasContact() ? $this->contact->address : null;
    }

    public function getWhatsapp(): ?string
    {
        return $this->hasContact() ? $this->contact->whatsapp : null;
    }

    public function hasSocialMedias(): bool
    {
        return $this->hasContact() && 
               isset($this->contact->socialMedias) && 
               $this->contact->socialMedias->isNotEmpty();
    }
}