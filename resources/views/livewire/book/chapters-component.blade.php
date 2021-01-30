<div>
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 shadow">
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
                @forelse ($chapters as $chapter)
                <livewire:book.chapter-item-component :chapter="$chapter->id" :key="$chapter->id" />
                @empty
                <td class="px-6 py-4 whitespace-nowrap" colspan="5">
                    <div class="text-sm text-gray-900">
                        нет глав, создать?
                    </div>
                </td>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $chapters->links() }}
    </div>
</div>