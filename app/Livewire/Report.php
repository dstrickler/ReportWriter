<?php

namespace App\Livewire;

use App\Models\Family;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Livewire\Component;

class Report extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Family::query())
            ->paginated([10, 25, 50, 100, 'all'])
            ->searchable(TRUE) // Doesn't work yet
            ->filters([
                Filter::make('name'),
            ], layout: FiltersLayout::AboveContentCollapsible)
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->label('Family Name'),
                TextColumn::make('summer_address_1')
                    ->sortable()
                    ->label('Summer Address'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render()
    {
        return view('livewire.report');
    }
}
