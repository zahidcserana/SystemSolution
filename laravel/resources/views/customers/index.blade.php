<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 dark:bg-black">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <livewire:customer-table type='monthly'/>
        </div>
    </div>
</x-app-layout>
