<div class="ml-3 relative">
    <input type="text"
        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
        placeholder="{{ $searchPlaceholders[array_rand($searchPlaceholders)] }}" wire:model.debounce.300ms="query"
        wire:keydown.escape="resetFilters" wire:keydown.enter="select" />

    <div wire:loading class="absolute w-full z-50 bg-white border border-gray-300 mt-1 mh-48 overflow-hidden overflow-y-scroll rounded-md shadow-md">
        <div class="px-3 py-2 cursor-pointer hover:bg-gray-200">Поиск...</div>
    </div>

    @if(!empty($query))
    <span wire:click="resetFilters" class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
        x
    </span>

    <div
        class="absolute w-full z-50 bg-white border border-gray-300 mt-1 mh-48 overflow-hidden overflow-y-scroll rounded-md shadow-md">
        @if($type == 'books')
            @forelse($books as $i => $book)
            <a href="{{ route('books.show', $book['id']) }}"
                class="px-3 py-2 block cursor-pointer hover:bg-gray-200">{{ $book['name'] }}</a>
            @empty
            <div class="px-3 py-2 cursor-pointer hover:bg-gray-200">Ничего не найдено</div>
            @endforelse
        @elseif($type=='users')
            @forelse($users as $i => $user)
            <a href="{{ route('users.show', $user['id']) }}"
                class="px-3 py-2 block cursor-pointer hover:bg-gray-200">{{ $user['name'] }}</a>
            @empty
            <div class="px-3 py-2 cursor-pointer hover:bg-gray-200">Ничего не найдено</div>
            @endforelse
        @endif
    </div>
    @endif
</div>