<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class SortUsers extends Page
{
    use InteractsWithRecord;
    protected static string $resource = UserResource::class;

    protected static string $view = 'filament.resources.user-resource.pages.sort-users';


    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }
}
