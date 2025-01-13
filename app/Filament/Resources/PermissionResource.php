<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Attendance;
use App\Models\Permission;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PermissionResource\Pages;
use App\Filament\Resources\PermissionResource\RelationManagers;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Siapa Yang Minta Izin')->schema([
                        Select::make('user_id')
                        ->label('Pilih Karyawan')
                        ->options(User::where('role', 'karyawan')->pluck('name', 'id'))
                        ->searchable(),
    
                        Select::make('attendance_id')
                        ->label('Pilih Absensi')
                        ->options(Attendance::all()->pluck('title', 'id'))
                        ->searchable()
                    ])
                ])->columns(1),

                Group::make()->schema([
                     Section::make('Alasan nya minta izin')->schema([
                        TextInput::make('title')
                        ->label('Type Of Permission')
                        ->required()
                        ->maxLength(50),
                        
                        TextInput::make('description')
                        ->label('Apa Alasan Anda')
                        ->required()
                        ->maxLength(500),

                        DateTimePicker::make('permission_date')
                        ->label('Tanggal Izin')
                        ->required(),

                        Toggle::make('is_accepted')
                        ->label('Apakah Izin Diterima?')
                        ->inline(false),
                    ])
                ])->columns(1)
             
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                ->label('Nama Karyawan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('attendance.title')
                ->label('Absensi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('permission_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_accepted')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPermissions::route('/'),
            'create' => Pages\CreatePermission::route('/create'),
            'edit' => Pages\EditPermission::route('/{record}/edit'),
        ];
    }
}
