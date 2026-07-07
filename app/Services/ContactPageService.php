<?php

namespace App\Services;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\DTOs\ContactPageData;

class ContactPageService
{
    public function __construct(
        protected ContactRepositoryInterface $contactRepository
    ) {}

    /**
     * Obtém todos os dados para a página de Contato
     */
    public function getContactPageData(): ContactPageData
    {
        // Buscar informações de contato
        $contact = $this->contactRepository->getContactWithSocialMedia();

        // Se quiser adicionar mais dados, como formulários, etc.
        // $formConfig = $this->getFormConfig();

        return new ContactPageData([
            'contact' => $contact,
            // 'formConfig' => $formConfig,
        ]);
    }

    /**
     * Obtém apenas as informações básicas de contato
     * (útil para headers/footers)
     */
    public function getBasicContactInfo(): array
    {
        return $this->contactRepository->getContactInfo();
    }

    /**
     * Verifica se as informações de contato existem
     */
    public function hasContact(): bool
    {
        return !is_null($this->contactRepository->getContact());
    }

    /**
     * Processa o formulário de contato (se houver)
     */
    public function processContactForm(array $data): array
    {
        // Validação
        $validated = validator($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ])->validate();

        // Aqui você pode enviar email, salvar no banco, etc.
        // Exemplo:
        // Mail::to(config('mail.contact_email'))->send(new ContactFormMail($validated));
        
        // Retornar sucesso
        return [
            'success' => true,
            'message' => 'Mensagem enviada com sucesso!',
        ];
    }
}