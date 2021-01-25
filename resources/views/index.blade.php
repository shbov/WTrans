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
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">0</li>
                            <li class="glide__slide">1</li>
                            <li class="glide__slide">2</li>
                            <li class="glide__slide">0</li>
                            <li class="glide__slide">1</li>
                            <li class="glide__slide">2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('js/glide.js') }}" defer></script>
    @endpush

</x-app-layout>