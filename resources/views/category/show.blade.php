<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            <h2 class="mb-2 sm:mb-0 font-semibold text-xl text-gray-800 leading-tight inline-flex ml-3">
                {{ $category->name }}
            </h2>
            <div>
                @auth
                <a href="{{ route('books.create') }}"
                    class="ml-3 px-4 py-2 border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm transition ease-in-out duration-150 bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 text-white">Добавить
                    перевод</a>
                @endauth
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 my-8">
                    @foreach ($books as $book)
                    <div class="shadow cursor-pointer overflow-hidden sm:rounded-md"
                        onclick="location.href='{{ route('books.show', $book->id) }}'">
                        <div class="bg-white">
                            <img src="https://insidepulse.com/wp-content/uploads/2018/09/Fox-911-Season-2-banner.jpg"
                                alt="9-1-1" class="img-16-9" loading="lazy">
                            <div class="py-4 px-4">
                                <div class="flex flex-col mb-3 sm:mb-0">
                                    <h1
                                        class="mb-2 sm:mb-0 font-semibold text-md text-gray-800 leading-tight inline-flex">
                                        {{ $book->native_name }}
                                    </h1>
                                    <h4 class="text-xs  text-gray-500">
                                        {{ $book->name }}
                                    </h4>
                                </div>
                                <p class="text-sm my-3">{!! $book->desc !!}</p>
                            </div>
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