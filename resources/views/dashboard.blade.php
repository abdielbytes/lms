<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" id="alertBox">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div>
        Hello
    </div>
</x-app-layout>

<style>
    #alertBox {
        transition: opacity 0.5s ease;
    }
</style>

<script>
    const alertBox = document.getElementById('alertBox');

    setTimeout(() => {
        alertBox.style.opacity = '0';
    }, 3000);

    setTimeout(() => {
        alertBox.style.display = 'none';
    }, 3500);
</script>
