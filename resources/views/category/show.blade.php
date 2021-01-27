<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between">
            <h2 class="mb-2 sm:mb-0 font-semibold text-xl text-gray-800 leading-tight inline-flex ml-3">
                {{ $category->name }}
            </h2>
            <div>
                {{-- <a href="{{ route('books.create', $book->id) }}"
                    class="ont-semibold text-xs uppercase tracking-widest">Вступить</a> --}}
                <a href="{{ route('books.create', $category->id) }}"
                    class="ml-3 px-4 py-2 border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm transition ease-in-out duration-150 bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 text-white">Добавить перевод</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-4 gap-4 my-8">
                    @foreach ($books as $book)
                    <div class="transform hover:scale-105 transition duration-500 ease-in-out py-16 px-9 bg-gray-100 flex justify-center cursor-pointer big-poster"
                        onclick="location.href='{{ route('books.show', $book->id) }}'">
                        {{-- <img src="{{ $book->img }}" alt="{{ $book->name }}" class="img-16-9 transition duration-500 ease-in-out" loading="lazy"> --}}
                        <img src="https://insidepulse.com/wp-content/uploads/2018/09/Fox-911-Season-2-banner.jpg"
                            alt="9-1-1" class="img-16-9 transition duration-500 ease-in-out" loading="lazy">
                        <div class="z-10 info text-white transition duration-500 ease-in-out">
                            {{ $book->name }}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
