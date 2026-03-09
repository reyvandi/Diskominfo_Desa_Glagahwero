<?php

namespace App\Filament\Admin\Resources\ProdukDesas\Pages;

use App\Filament\Admin\Resources\ProdukDesas\ProdukDesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProdukDesas extends ListRecords
{
    protected static string $resource = ProdukDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
