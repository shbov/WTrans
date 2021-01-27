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
        <div class="max-w-7xl mx-auto md:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="bg-white">
                            <img src="https://insidepulse.com/wp-content/uploads/2018/09/Fox-911-Season-2-banner.jpg"
                                alt="9-1-1" class="img-16-9" loading="lazy">
                            <div class="py-4 px-4">
                                <h4 class="text-md mb-2">{{ $book->language->name }} <span
                                        class="text-gray-300">/</span> {{ $book->nativeLanguage->name }}</h4>
                                <p>{!! $book->desc !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    @auth
                    @if(session('error'))
                    <div role="alert" class="mb-3">
                        <div class="border border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif
                    @if(session('success'))
                    <div role="alert" class="mb-3">
                        <div class="border border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif
                    @endauth
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        tippy('#bookTitle-{{ $book->id }}', {
            content: '[{{ $book->nativeLanguage->name }}] {{ $book->native_name }}',
        });
    </script>
    @endpush
</x-app-layout>