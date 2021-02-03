<div>
    @if ($team->books->isNotEmpty())
    <x-jet-section-border />

    <div class="mt-10 sm:mt-0">
        <x-jet-action-section>
            <x-slot name="title">
                {{ __('Team Books') }}
            </x-slot>

            <x-slot name="description">
                {{ __('All of the people that are part of this team.') }}
            </x-slot>

            <x-slot name="content">
                <div class="space-y-6">
                    @foreach ($team->books->sortBy('name') as $book)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <h1 id="bookNative-{{ $book->id }}"
                                    class="mb-2 sm:mb-0 font-semibold text-md text-gray-800 leading-tight inline-flex">
                                    {{ $book->native_name }}
                                </h1>
                                <h4 id="bookTranslated-{{ $book->id }}" class="text-xs text-gray-500">
                                    {{ $book->name }}
                                </h4>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <a class="cursor-pointer ml-6 text-sm text-gray-500"
                                href="{{ route('books.show', $book->id) }}">
                                {{ __('View') }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </x-slot>
        </x-jet-action-section>
    </div>
    @endif
</div>