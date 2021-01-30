<tr>
    <td class="pl-3 pr-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
            @can('test')
            <a href="#" class="mr-3">
                <svg width='14' height='14' xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#000">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
            @endcan
            <div>
                <div class="text-sm font-medium text-gray-900">
                    {{ $name }}
                </div>
                <div class="text-xs text-gray-500">
                    {{ $mediainfo }}
                </div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">
            {{ $statusMessage }}
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">
            23 мин.
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900" id="bookCreated-{{ $chapter }}">
            {{ $created_at->format('H:i') }}
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <div class="text-sm text-gray-900">
            87.8% (872 / 993)
        </div>
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Скачать</a>
    </td>
</tr>
@push('scripts')
<script>
    tippy('#bookCreated-{{ $chapter }}', {
            content: '{{ $created_at }}',
        });
</script>
@endpush