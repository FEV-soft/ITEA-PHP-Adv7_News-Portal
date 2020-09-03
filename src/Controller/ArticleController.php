<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\SinglePageArticleInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller class for display article's page.
 */
final class ArticleController extends AbstractController
{
    private SinglePageArticleInterface $articleFakeGenerator;

    public function __construct(SinglePageArticleInterface $articleFakeGenerator)
    {
        $this->articleFakeGenerator = $articleFakeGenerator;
    }

    /**
     * @Route("/article/{id}", methods={"GET"}, name="app_article")
     */
    public function showArticle(int $id): Response
    {
        $article = $this->articleFakeGenerator->getArticle($id);

        return $this->render('/article/single_article.html.twig', [
            'article' => $article,
        ]);
    }
}
