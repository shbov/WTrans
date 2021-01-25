<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    @forelse ($books as $book)
                    <li>{{ $book->name }}, {{ $book->desc }}, {{ $book->language->name }}</li>
                    @empty
                    <li>Нет ни одного доступного перевода. <a href="#">Добавить новый?</a></li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>