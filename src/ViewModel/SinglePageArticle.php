<?php

declare(strict_types=1);

namespace App\ViewModel;

/**
 * DTO model for store single article data.
 */
final class SinglePageArticle
{
    private int $id;
    private string $categoryTitle;
    private string $title;
    private \DateTimeImmutable $publicationDate;
    private string $bodyArticle;
    private ?string $image;

    public function __construct(
        int $id,
        string $categoryTitle,
        string $title,
        \DateTimeImmutable $publicationDate,
        string $bodyArticle,
        ?string $image
    ) {
        $this->id = $id;
        $this->categoryTitle = $categoryTitle;
        $this->title = $title;
        $this->publicationDate = $publicationDate;
        $this->bodyArticle = $bodyArticle;
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategoryTitle(): string
    {
        return $this->categoryTitle;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPublicationDate(): \DateTimeImmutable
    {
        return $this->publicationDate;
    }

    public function getBodyArticle(): string
    {
        return $this->bodyArticle;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }
}
