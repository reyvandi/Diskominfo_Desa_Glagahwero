<?php

namespace App\Filament\Admin\Resources\Dokumens;

use App\Filament\Admin\Resources\Dokumens\Pages\CreateDokumen;
use App\Filament\Admin\Resources\Dokumens\Pages\EditDokumen;
use App\Filament\Admin\Resources\Dokumens\Pages\ListDokumens;
use App\Filament\Admin\Resources\Dokumens\Schemas\DokumenForm;
use App\Filament\Admin\Resources\Dokumens\Tables\DokumensTable;
use App\Models\Dokumen;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DokumenResource extends Resource
{
    protected static ?string $model = Dokumen::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function getNavigationGroup(): ?string
    {
        return 'Konten Desa';
    }

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return DokumenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DokumensTable::configure($table);
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
            'index' => ListDokumens::route('/'),
            'create' => CreateDokumen::route('/create'),
            'edit' => EditDokumen::route('/{record}/edit'),
        ];
    }
}
