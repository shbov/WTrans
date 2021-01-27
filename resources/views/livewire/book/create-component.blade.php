<x-jet-form-section submit="store">
    <x-slot name="title">
        Информация о переводе
    </x-slot>

    <x-slot name="description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nobis blanditiis, culpa consequatur maiores neque
        laboriosam, iusto aspernatur itaque, voluptate ipsa numquam eos quia temporibus. Aliquid perferendis
        exercitationem sint eveniet.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-2">
            <x-jet-label for="native_language_id" value="{{ __('Язык оригинала') }}" />

            <select id="native_language_id" wire:model.defer="book.native_language_id" autocomplete="native_language_id"
                class="border-gray-300 focus:border-indigo-300
                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                <option value="undefined" disabled selected="selected">Выберите язык</option>
                @foreach ($LanguageOptions as $option)
                <option value="{{ $option['id'] }}">{{ $option['value'] }}</option>
                @endforeach
            </select>

            @error('book.native_language_id')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="native_name" value="{{ __('Название на языке оригинала') }}" />
            <x-jet-input id="native_name" type="text" class="mt-1 block w-full" wire:model.defer="book.native_name"
                autocomplete="native_name" />

            @error('book.native_name')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
        </div>

        <div class="col-span-6 sm:col-span-2">
            <x-jet-label for="language_id" value="{{ __('Язык перевода') }}" />
            <select id="language_id" wire:model.defer="book.language_id" autocomplete="language_id" class="border-gray-300 focus:border-indigo-300
            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                <option value="undefined" disabled selected="selected">Выберите язык</option>
                @foreach ($LanguageOptions as $option)
                <option value="{{ $option['id'] }}">{{ $option['value'] }}</option>
                @endforeach
            </select>

            @error('book.language_id')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Название на языке перевода') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="book.name"
                autocomplete="name" />

            @error('book.name')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
        </div>

        <div class="col-span-6 sm:col-span-6">
            <x-jet-label for="desc" value="{{ __('Описание') }}" />
            <textarea name="desc" rows="5" id="desc" wire:model.defer="book.desc" autocomplete="desc"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"></textarea>

            @error('book.desc')<p class="text-sm text-red-600 mt-2">{{ $message }}</p>@enderror
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button wire:loading.attr="disabled" wire:keydown.enter="store">
            {{ __('Создать') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>