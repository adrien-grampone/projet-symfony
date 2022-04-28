<?php

declare(strict_types=1);

namespace App\Infra\Admin\Menu;

use App\Infra\Menu\Link;
use App\Infra\Menu\MenuItem;

class AdminArticleMenu implements Link
{
    private const priority = 2;

    private const menuItems = [
        ['label' => 'Créer un article', 'route' => 'app_infra_admin_createarticle_create'],
    ];

    public function getLinks(): iterable
    {
        foreach (self::menuItems as $item) {
            yield $item;
        }
    }

    public function getPriority(): int
    {
        return self::priority;
    }
}