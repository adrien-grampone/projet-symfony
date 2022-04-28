<?php

declare(strict_types=1);

namespace App\Infra\Menu;

interface Link
{
    public function getLinks(): iterable;
    public function getPriority(): int;
}