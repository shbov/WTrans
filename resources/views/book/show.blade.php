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

            @auth
                <div>
                    @if(!$book->isBookOwner(auth()->user()->id) && !($book->team && $book->team->hasUser(auth()->user())))

                        @if(auth()->user()->can('books.leave') && $book->isBookMember(auth()->user()->id))
                            <a href="{{ route('books.leave', $book->id) }}"
                               class="text-xs uppercase tracking-widest">Выйти из перевода</a>

                        @elseif(auth()->user()->can('books.join'))
                            <a href="{{ route('books.join', $book->id) }}"
                               class="text-xs uppercase tracking-widest">Вступить</a>
                        @endif

                        @if($book->isBookOwner(auth()->user()->id) || auth()->user()->can('books.edit.*'))
                            <a href="{{ route('books.edit', $book->id) }}"
                               class="ml-3 px-4 py-2 border rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm transition ease-in-out duration-150 bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 text-white">Изменить</a>
                        @endif
                    @else
                        <button
                            class="text-xs uppercase tracking-widest opacity-50" @popper(Вы не можете покинуть
                            данный перевод)>
                            Выйти из перевода
                        </button>
                    @endif
                </div>
            @endauth
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto md:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 xl:h-screen xl:sticky top-4">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="bg-white">
                            <div class="relative">
                                <img
                                    src="https://insidepulse.com/wp-content/uploads/2018/09/Fox-911-Season-2-banner.jpg"
                                    alt="9-1-1" class="img-16-9" loading="lazy">
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none bg-gray-800 text-gray-300 absolute top-4 right-4">{{ $book->created_at->format('d.m.y H:i') }}</span>
                            </div>
                            <div class="py-4 px-4">
                                <h4 class="text-sm text-gray-500 mb-2">
                                    Категория: {{ $book->category()->exists()?$book->category->name:'–'}}</h4>
                                <p class="text-sm mb-2">{!! $book->desc !!}</p>

                                <h5>
                                    Владелец: <a
                                        href="{{ route('users.show', $book->owner()->id) }}">{{ $book->owner()->name }}</a>
                                </h5>

                                <h5>
                                    Команда: {{ $book->team()->exists() ? $book->team->name : "–"}}
                                </h5>

                                <ul class="my-2">
                                    <li><a
                                            href="//phys-kids.com/index.php?do=search&story={!! $book->native_name !!}&s=tt">phys-kids.com</a>
                                    </li>
                                    <li><a
                                            href="//rarbgmirror.com/torrents.php?search={!! $book->native_name !!}&s=tt">rarbgmirror.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">

                    @if(session('success'))
                        @livewire('alert-component', ['type' => 'success', 'message' => session('success')])

                    @elseif(session('error'))
                        @livewire('alert-component', ['type' => 'danger', 'message' => session('error')])
                    @endif

                    <div class="overflow-hidden sm:rounded-md">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    @livewire('book.chapters-component', ['book_id' => $book->id])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
