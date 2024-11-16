<?php

namespace App\Filament\Admin\Resources\PembeliResource\Pages;

use App\Filament\Admin\Resources\PembeliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPembeli extends EditRecord
{
    protected static string $resource = PembeliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
