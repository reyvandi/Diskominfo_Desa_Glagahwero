<?php

namespace App\Filament\Admin\Resources\ProdukDesas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProdukDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                Select::make('kategori')
                    ->required()
                    ->options([
                        'umkm'    => 'UMKM',
                        'wisata'  => 'Tempat Wisata',
                        'pakaian' => 'Pakaian Daerah',
                        'makanan' => 'Makanan Khas',
                        'adat'    => 'Adat Istiadat',
                    ]),
                TextInput::make('sub_kategori'),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->image()
                    ->directory('produk-desa')
                    ->disk('public'),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
