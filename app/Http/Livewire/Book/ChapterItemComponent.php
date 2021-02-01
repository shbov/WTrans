<?php

namespace App\Http\Livewire\Book;

use App\Models\Chapter;
use Livewire\Component;

class ChapterItemComponent extends Component
{
    public $chapter;
    public $name, $mediainfo, $statusMessage, $updated_at, $created_at;

    public function mount()
    {
        $this->getChapter();
    }

    public function getChapter()
    {
        $chapterModel = Chapter::find($this->chapter);

        $this->name = $chapterModel->name;
        $this->mediainfo = $chapterModel->mediainfo;
        $this->updated_at = $chapterModel->updated_at;
        $this->created_at = $chapterModel->created_at;
        $this->statusMessage = Chapter::getStatus($chapterModel->status);
    }

    public function render()
    {
        return view('livewire.book.chapter-item-component');
    }
}
