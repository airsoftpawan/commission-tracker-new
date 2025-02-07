<?php

namespace App\Filament\Admin\Resources\SalesmanResource\Pages;

use App\Filament\Admin\Resources\SalesmanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSalesman extends CreateRecord
{
    protected static string $resource = SalesmanResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
