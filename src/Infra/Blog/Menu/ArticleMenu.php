<?php

declare(strict_types=1);

namespace App\Infra\Blog\Menu;

use App\Infra\Menu\Link;

class ArticleMenu implements Link
{
    private const menuItems = [
        ['label' => 'Accueil', 'route' => 'home'],
    ];

    public function getLinks(): iterable
    {
        foreach (self::menuItems as $item) {
            yield $item;
        }
    }

    public function getPriority(): int
    {
        return -999;
    }
}