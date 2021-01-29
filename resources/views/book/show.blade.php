<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            <div class="flex flex-col mb-3 sm:mb-0">
                <h1 id="bookNative-{{ $book->id }}" class="mb-2 sm:mb-0 font-semibold text-md sm:text-xl text-gray-800 leading-tight inline-flex">
                    {{ $book->native_name }}
                </h1>
                <h4 id="bookTranslated-{{ $book->id }}" class="text-xs sm:text-sm text-gray-500">
                    {{ $book->name }}
                </h4>
            </div>
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
                <div class="md:col-span-1 xl:h-screen xl:sticky top-4">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="bg-white">
                            <div class="relative">
                                <img src="https://insidepulse.com/wp-content/uploads/2018/09/Fox-911-Season-2-banner.jpg"
                                    alt="9-1-1" class="img-16-9" loading="lazy">
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none bg-gray-800 text-gray-300 absolute top-4 right-4">{{ $book->created_at->format('d.m.y H:i') }}</span>
                            </div>
                            <div class="py-4 px-4">
                                <h4 class="text-sm text-gray-500 mb-2">
                                    {{ $book->category()->exists()?$book->category->name:''}}</h4>
                                <p class="text-sm mb-2">{!! $book->desc !!}</p>

                                <h5>
                                    Владелец – <a
                                        href="{{ route('users.show', $book->owner()->id) }}">{{ $book->owner()->name }}</a>
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
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Название
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Статус
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Активность
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Добавлено
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Готово
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @for ($i = 0; $i < 20; $i++) <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Jane Cooper
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    jane.cooper@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            Переводится
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            23 мин.
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            19:00
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <div class="text-sm text-gray-900">
                                                            87.8% (872 / 993)
                                                        </div>
                                                        <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900">Скачать</a>
                                                    </td>
                                                    </tr>
                                                    @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        tippy('#bookNative-{{ $book->id }}', {
            content: '[{{ $book->nativeLanguage->name }}] {{ $book->nativeLanguage->native }}',
        });
        tippy('#bookTranslated-{{ $book->id }}', {
            content: '[{{ $book->language->name }}] {{ $book->language->native }}',
        });
    </script>
    @endpush
</x-app-layout>