<?php

namespace App\Filament\admin\Resources\ProfilDesas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfilDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('visi')
                    ->label('Visi Desa')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Repeater::make('misi')
                    ->label('Misi Desa')
                    ->schema([
                        TextInput::make('item')
                            ->label('Poin Misi')
                            ->required(),
                    ])
                    ->addActionLabel('Tambah Misi')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('sejarah')
                    ->label('Sejarah Desa')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('bagan')
                    ->label('Bagan Struktur Organisasi')
                    ->image()
                    ->disk('public')
                    ->directory('profil-desa')
                    ->nullable(),
                TextInput::make('periode')
                    ->label('Periode')
                    ->placeholder('2024-2025')
                    ->nullable(),
            ]);
    }
}
