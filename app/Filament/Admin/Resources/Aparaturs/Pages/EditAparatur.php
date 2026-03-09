<?php

namespace App\Filament\Admin\Resources\Aparaturs\Pages;

use App\Filament\Admin\Resources\Aparaturs\AparaturResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAparatur extends EditRecord
{
    protected static string $resource = AparaturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
