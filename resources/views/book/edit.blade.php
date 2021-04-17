<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            <div class="flex flex-col mb-3 sm:mb-0">
                <h1 @popper([{{ $book->nativeLanguage->name }}] {{ $book->nativeLanguage->native }})
                    class="mb-2 sm:mb-0 font-semibold text-md sm:text-xl text-gray-800 leading-tight inline-flex">
                    {{ $book->native_name }}
                </h1>
                <h4 @popper([{{ $book->language->name }}] {{ $book->language->native }})
                    class="text-xs sm:text-sm text-gray-500">
                    {{ $book->name }}
                </h4>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @livewire('book.edit-component', ['book'=> $book])
            </div>
        </div>
    </div>
</x-app-layout>
