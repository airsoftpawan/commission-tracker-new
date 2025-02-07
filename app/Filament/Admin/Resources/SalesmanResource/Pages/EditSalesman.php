<?php

namespace App\Filament\Admin\Resources\SalesmanResource\Pages;

use App\Filament\Admin\Resources\SalesmanResource;
use Filament\Resources\Pages\EditRecord;

class EditSalesman extends EditRecord
{
    protected static string $resource = SalesmanResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
