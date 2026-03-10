<?php

namespace App\Filament\Admin\Resources\ProdukDesas;

use App\Filament\Admin\Resources\ProdukDesas\Pages\CreateProdukDesa;
use App\Filament\Admin\Resources\ProdukDesas\Pages\EditProdukDesa;
use App\Filament\Admin\Resources\ProdukDesas\Pages\ListProdukDesas;
use App\Filament\Admin\Resources\ProdukDesas\Schemas\ProdukDesaForm;
use App\Filament\Admin\Resources\ProdukDesas\Tables\ProdukDesasTable;
use App\Models\ProdukDesa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProdukDesaResource extends Resource
{
    protected static ?string $model = ProdukDesa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShoppingBag;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function getNavigationGroup(): ?string
    {
        return 'Konten Desa';
    }

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ProdukDesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProdukDesasTable::configure($table);
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
            'index' => ListProdukDesas::route('/'),
            'create' => CreateProdukDesa::route('/create'),
            'edit' => EditProdukDesa::route('/{record}/edit'),
        ];
    }
}
