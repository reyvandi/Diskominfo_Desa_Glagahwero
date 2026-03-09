<?php

namespace App\Filament\admin\Resources\ProfilDesas;

use App\Filament\admin\Resources\ProfilDesas\Pages\CreateProfilDesa;
use App\Filament\admin\Resources\ProfilDesas\Pages\EditProfilDesa;
use App\Filament\admin\Resources\ProfilDesas\Pages\ListProfilDesas;
use App\Filament\admin\Resources\ProfilDesas\Schemas\ProfilDesaForm;
use App\Filament\admin\Resources\ProfilDesas\Tables\ProfilDesasTable;
use App\Models\ProfilDesa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfilDesaResource extends Resource
{
    protected static ?string $model = ProfilDesa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'visi';

    public static function form(Schema $schema): Schema
    {
        return ProfilDesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilDesasTable::configure($table);
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
            'index' => ListProfilDesas::route('/'),
            'create' => CreateProfilDesa::route('/create'),
            'edit' => EditProfilDesa::route('/{record}/edit'),
        ];
    }
}
