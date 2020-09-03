<?php

declare(strict_types=1);

namespace App\Service;

use App\ViewModel\SinglePageArticle;

interface SinglePageArticleInterface
{
    public function getArticle(int $id): SinglePageArticle;
}
