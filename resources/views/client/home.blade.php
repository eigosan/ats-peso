<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl md:text-2xl leading-tight" style="color: #bf9b30;">
            {{ __('client Home') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Home page") }}
                </div>
            </div>
        </div>
    </div>
</x-client-layout>
