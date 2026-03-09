<?php

namespace App\Filament\Admin\Resources\ProdukDesas\Pages;

use App\Filament\Admin\Resources\ProdukDesas\ProdukDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProdukDesa extends EditRecord
{
    protected static string $resource = ProdukDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
