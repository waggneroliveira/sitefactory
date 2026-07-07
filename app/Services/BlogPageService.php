<?php

namespace App\Services;

use App\Contracts\Repositories\{
    BlogRepositoryInterface,
    AnnouncementRepositoryInterface
};
use App\DTOs\BlogPageData;
use App\DTOs\BlogInnerPageData;
use App\Models\Contact;
use App\Models\PopUp;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogPageService
{
    public function __construct(
        protected BlogRepositoryInterface $blogRepository,
        protected AnnouncementRepositoryInterface $announcementRepository
    ) {}

    /**
     * Obtém todos os dados para a página principal do Blog
     */
    public function getBlogPageData(?string $category = null, ?string $search = null): BlogPageData
    {
        // Buscar categorias
        $blogCategories = $this->blogRepository->getBlogCategories();

        // Buscar posts com paginação
        $blogAll = $this->blogRepository->getBlogAll($category, $search, 15);

        // Buscar posts relacionados (excluindo os da página atual)
        $blogSeeAlso = $this->blogRepository->getBlogSeeAlso(
            $blogAll->pluck('id')->toArray(),
            4
        );
        // Buscar contato
        $contact = Contact::first();

        // Buscar PopUp
        $popUp = PopUp::active()->first();

        return new BlogPageData([
            'blogCategories' => $blogCategories,
            'blogAll' => $blogAll,
            'blogSeeAlso' => $blogSeeAlso,
            'contact' => $contact,
            'popUp' => $popUp,
        ]);
    }

    /**
     * Obtém todos os dados para a página interna do Blog
     */
    public function getBlogInnerPageData(string $slug): BlogInnerPageData
    {
        // Buscar o post
        $blogInner = $this->blogRepository->getBlogBySlug($slug);

        if (!$blogInner) {
            return new BlogInnerPageData(['error' => 'Post não encontrado']);
        }

        // Buscar posts relacionados (mesma categoria)
        $blogRelacionados = $this->blogRepository->getBlogRelated(
            $blogInner->category->id,
            $blogInner->id,
            4
        );

        // Buscar "veja mais" (outras categorias)
        $viewMores = $this->blogRepository->getViewMores(
            $blogInner->category->id,
            10
        );

        // Buscar categorias
        $blogCategories = $this->blogRepository->getBlogCategories();

        // Buscar anúncios
        $announcements = $this->announcementRepository->getHorizontal();
        $announcementVerticals = $this->announcementRepository->getVertical();

        // Buscar contato
        $contact = Contact::first();

        return new BlogInnerPageData([
            'blogInner' => $blogInner,
            'blogRelacionados' => $blogRelacionados,
            'viewMores' => $viewMores,
            'blogCategories' => $blogCategories,
            'announcements' => $announcements,
            'announcementVerticals' => $announcementVerticals,
            'contact' => $contact,
            'slug' => $slug,
        ]);
    }

    /**
     * Método auxiliar para verificar se o post existe
     */
    public function blogExists(string $slug): bool
    {
        return !is_null($this->blogRepository->getBlogBySlug($slug));
    }
}