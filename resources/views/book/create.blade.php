<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between">
            <h2 class="mb-2 sm:mb-0 font-semibold text-xl text-gray-800 leading-tight inline-flex">Создать перевод
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                @livewire('book.create-component')
            </div>
        </div>
    </div>
</x-app-layout>