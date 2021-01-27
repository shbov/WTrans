<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($books as $book)
                            <li class="glide__slide">
                                <div class="py-2 bg-gray-400 flex justify-center">
                                    {{ $book->name }}
                                </div>
                            </li>
                            {{-- @empty --}}
                            {{-- <li>Нет ни одного доступного перевода. <a href="#">Добавить новый?</a></li> --}}
                            @endforeach
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('js/glide.js') }}" defer></script>
    @endpush

</x-app-layout>
