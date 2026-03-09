<?php

namespace App\Filament\Admin\Resources\Dokumens\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DokumenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Select::make('kategori')
                    ->required()
                    ->options([
                        'apbdes'     => 'APBDes',
                        'peraturan'  => 'Peraturan Desa',
                        'keuangan'   => 'Dokumen Keuangan',
                        'perizinan'  => 'Dokumen Perizinan',
                    ]),
                FileUpload::make('file')
                    ->directory('dokumen')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf']),
                TextInput::make('ukuran'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
