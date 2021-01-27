<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between">
            <h2 class="mb-2 sm:mb-0 font-semibold text-xl text-gray-800 leading-tight inline-flex ml-3"
                id="bookTitle-{{ $book->id }}">
                {{ $book->name }}
            </h2>
            @auth
            <div>
                @if($book->isBookMember(auth()->user()->id))
                <a href="{{ route('books.leave', $book->id) }}"
                    class="ont-semibold text-xs uppercase tracking-widest">Выйти из перевода</a>
                @else
                <a href="{{ route('books.join', $book->id) }}"
                    class="ont-semibold text-xs uppercase tracking-widest">Вступить</a>
                @endif
                @if($book->isBookOwner(auth()->user()->id))
                <a href="{{ route('books.edit', $book->id) }}"
                    class="ml-3 px-4 py-2 border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm transition ease-in-out duration-150 bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 text-white">Изменить</a>
                @endif
            </div>
            @endauth
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @auth
                    @foreach (auth()->user()->books as $book)
                        <li>{{ $book->name }} [is owner? {{ $book->isBookOwner(auth()->user()->id)?"true":"false" }}]</li>
                    @endforeach
                @endauth
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        tippy('#bookTitle-{{ $book->id }}', {
            content: '[{{ $book->language->name }}] {{ $book->native_name }}',
        });
    </script>
    @endpush
</x-app-layout>