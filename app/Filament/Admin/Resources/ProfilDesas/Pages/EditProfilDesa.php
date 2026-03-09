<?php

namespace App\Filament\admin\Resources\ProfilDesas\Pages;

use App\Filament\admin\Resources\ProfilDesas\ProfilDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfilDesa extends EditRecord
{
    protected static string $resource = ProfilDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
