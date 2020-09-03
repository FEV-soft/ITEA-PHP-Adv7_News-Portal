<?php

declare(strict_types=1);

namespace App\Service;

use App\ViewModel\SinglePageArticle;
use Faker\Factory;
use Faker\Generator;

/**
 * Class for generate fake articles.
 */
final class SinglePageArticleFakeGenerator implements SinglePageArticleInterface
{
    private const CATEGORIES = [
        'World',
        'Sport',
        'IT',
        'Science',
    ];

    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    private function createArticle(int $id): SinglePageArticle
    {
        $title = $this->faker->words(
            $this->faker->numberBetween(1, 4),
            true
        );
        $title = \ucfirst($title);

        return new SinglePageArticle(
            $id,
            $this->faker->randomElement(self::CATEGORIES),
            $title,
            \DateTimeImmutable::createFromMutable($this->faker->dateTimeThisYear),
            $this->faker->realText(1500),
            $this->faker->imageUrl()
        );
    }

    public function getArticle(int $id): SinglePageArticle
    {
        return $this->createArticle($id);
    }
}
