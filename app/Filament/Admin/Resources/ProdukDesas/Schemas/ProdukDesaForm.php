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
                TextInput::make('pemilik')
                    ->label('Nama Toko/Pemilik')
                    ->placeholder('Contoh: Toko Bu Sari'),
                TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp')
                    ->placeholder('6281234567890'),
                TextInput::make('lokasi')
                    ->label('Link Lokasi (Google Maps)')
                    ->placeholder('https://maps.google.com/?q=...')
                    ->columnSpanFull(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->image()
                    ->directory('produk-desa')
                    ->disk('public'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
