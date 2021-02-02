<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mediainfo',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function getStatus(): String
    {
        switch ($this->status) {
            case 1:
                return '';
            case 2:
                return 'Переводится';
            case 3:
                return 'Ожидает редактирования';
            case 4:
                return 'Редактируется';
            case 5:
                return 'Готово';
        }
    }
}