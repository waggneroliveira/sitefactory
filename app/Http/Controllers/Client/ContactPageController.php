<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ContactPageService;
use App\Services\ThemeManager;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactPageController extends Controller
{
    public function __construct(
        protected ContactPageService $contactPageService
    ) {}

    /**
     * Página de Contato
     */
    public function index(ThemeManager $theme)
    {
        $data = $this->contactPageService->getContactPageData();
        
        return view($theme->view('contact'), $data->all());
    }

    /**
     * Processa o formulário de contato (AJAX)
     */
    public function send(Request $request): JsonResponse
    {
        try {
            $result = $this->contactPageService->processContactForm($request->all());

            return response()->json([
                'success' => $result['success'],
                'message' => $result['message']
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),
                'message' => 'Por favor, verifique os dados informados.'
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar mensagem. Tente novamente mais tarde.'
            ], 500);
        }
    }

    /**
     * Endpoint para buscar informações de contato (para atualizações via AJAX)
     */
    public function getContactInfo(): JsonResponse
    {
        try {
            $contactInfo = $this->contactPageService->getBasicContactInfo();

            return response()->json([
                'success' => true,
                'data' => $contactInfo
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao buscar informações de contato.'
            ], 500);
        }
    }
}