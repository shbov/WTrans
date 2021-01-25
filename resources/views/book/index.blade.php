<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-4 gap-4 my-8">
                    @foreach ($books as $book)
                    <div class="py-16 px-9 bg-gray-100 flex justify-center">
                        {{ $book->name }}
                    </div>
                    {{-- @empty --}}
                    {{-- <li>Нет ни одного доступного перевода. <a href="#">Добавить новый?</a></li> --}}
                    @endforeach
                </div>
                <div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>