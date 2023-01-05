<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome back, ") . auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>

    @foreach (auth()->user()->pets as $pet)
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $pet->name . ', Last bathed on: ' . $pet->last_bathed }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
