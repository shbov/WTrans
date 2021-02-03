<div role="alert" class="mb-3 relative" x-show="open" x-data="{ open: true }">
    <div
        class="border rounded-b px-4 py-3 @if($type =='success') border-green-400 bg-green-100 text-green-700 @elseif($type=='danger') border-red-400 bg-red-100 text-red-700 @endif">
        <p>{{ $message }}</p>
    </div>
    <button
        class="absolute bg-transparent text-xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
        @click="open = false">
        <span>×</span>
    </button>
</div>