<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in :)!") }}

                </div>

                <div class="p-5 text-gray-800 dark:text-gray-200" style="padding: 30px; font-weight: 700;">
                    <h2 class="font-bold col-md-8" style="font-size: 2rem">
                        Please navigate your way to <a href="/messages" style="color: green"> messsages section</a> where you could use the messaging features. Thanks
                    </h2>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
