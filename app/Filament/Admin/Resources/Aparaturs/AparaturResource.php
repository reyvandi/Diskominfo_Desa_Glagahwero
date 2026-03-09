<?php

namespace App\Filament\Admin\Resources\Aparaturs;

use App\Filament\Admin\Resources\Aparaturs\Pages\CreateAparatur;
use App\Filament\Admin\Resources\Aparaturs\Pages\EditAparatur;
use App\Filament\Admin\Resources\Aparaturs\Pages\ListAparaturs;
use App\Filament\Admin\Resources\Aparaturs\Schemas\AparaturForm;
use App\Filament\Admin\Resources\Aparaturs\Tables\AparatursTable;
use App\Models\Aparatur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AparaturResource extends Resource
{
    protected static ?string $model = Aparatur::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'admin';

    public static function form(Schema $schema): Schema
    {
        return AparaturForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AparatursTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAparaturs::route('/'),
            'create' => CreateAparatur::route('/create'),
            'edit' => EditAparatur::route('/{record}/edit'),
        ];
    }
}
