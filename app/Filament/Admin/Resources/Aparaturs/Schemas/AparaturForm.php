<?php

namespace App\Filament\Admin\Resources\Aparaturs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AparaturForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                FileUpload::make('foto')
                    ->image()
                    ->directory('aparatur')
                    ->disk('public'),
                TextInput::make('alamat')
                    ->hidden(fn ($get) => !in_array($get('jabatan'), ['Kepala Desa', 'Sekretaris Desa'])),
                TextInput::make('pendidikan')
                    ->hidden(fn ($get) => !in_array($get('jabatan'), ['Kepala Desa', 'Sekretaris Desa'])),
                TextInput::make('ttl')
                    ->hidden(fn ($get) => !in_array($get('jabatan'), ['Kepala Desa', 'Sekretaris Desa'])),
                TextInput::make('periode')
                    ->hidden(fn ($get) => !in_array($get('jabatan'), ['Kepala Desa', 'Sekretaris Desa'])),
                Textarea::make('deskripsi')
                    ->columnSpanFull()
                    ->hidden(fn ($get) => !in_array($get('jabatan'), ['Kepala Desa', 'Sekretaris Desa'])),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
