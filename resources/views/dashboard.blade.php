<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="p-4 bg-green-100 text-green-800 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Welcome, User!</h3>
                        <p class="text-gray-600">{{ __("Enjoy your dashboard experience!") }}</p>
                    </div>
                </div>
            </div>

            <!-- User Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <div class="bg-blue-500 shadow-lg rounded-lg p-6 text-white text-center">
                    <h4 class="text-lg font-semibold">Your Profile</h4>
                    <p class="text-md">Update and manage your personal information.</p>
                </div>
                <div class="bg-green-500 shadow-lg rounded-lg p-6 text-white text-center">
                    <h4 class="text-lg font-semibold">Recent Activities</h4>
                    <p class="text-md">Track your latest actions on the platform.</p>
                </div>
                <div class="bg-purple-500 shadow-lg rounded-lg p-6 text-white text-center">
                    <h4 class="text-lg font-semibold">Messages</h4>
                    <p class="text-md">Check your latest notifications and messages.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
