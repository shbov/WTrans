<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($books as $book)
                            <div class="p-2">
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
                            </div>
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