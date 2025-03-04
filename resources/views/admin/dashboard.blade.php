<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg p-6">
                <div class="flex items-center space-x-4">
                    <div class="p-4 bg-blue-100 text-blue-800 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1m1 4h-1m0 0H7m8 0h1m-4-4v4m4-8h-1m-4 0h-1m0 0V7m4 0v4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Welcome, Admin!</h3>
                        <p class="text-gray-600">{{ __("You're logged in as an admin!") }}</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Section Modern -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 shadow-lg rounded-lg p-6 text-white flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m-6-6h6m5 6h-6m0 0V4m0 6V4m-6 6V4m0 6h6" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Total Users</h4>
                        <p class="text-4xl font-bold text-white">1,250</p>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 shadow-lg rounded-lg p-6 text-white flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Revenue</h4>
                        <p class="text-4xl font-bold text-white">$45,300</p>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-red-500 to-pink-600 shadow-lg rounded-lg p-6 text-white flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">Active Sessions</h4>
                        <p class="text-4xl font-bold text-white">320</p>
                    </div>
                </div>
            </div>

            <!-- Persen Bulat Modern dengan Animasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="relative w-24 h-24 mx-auto animate-spin-slow">
                        <svg class="w-24 h-24" viewBox="0 0 36 36">
                            <circle class="text-gray-200" stroke-width="4" fill="none" cx="18" cy="18" r="15.9155" />
                            <circle class="text-blue-500" stroke-width="4" fill="none" stroke-dasharray="75, 100" cx="18" cy="18" r="15.9155" stroke-linecap="round"/>
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-xl font-bold text-blue-500">75%</span>
                    </div>
                    <h4 class="text-gray-700 font-bold mt-4">Task Completion</h4>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="relative w-24 h-24 mx-auto animate-spin-slow">
                        <svg class="w-24 h-24" viewBox="0 0 36 36">
                            <circle class="text-gray-200" stroke-width="4" fill="none" cx="18" cy="18" r="15.9155" />
                            <circle class="text-green-500" stroke-width="4" fill="none" stroke-dasharray="60, 100" cx="18" cy="18" r="15.9155" stroke-linecap="round"/>
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-xl font-bold text-green-500">60%</span>
                    </div>
                    <h4 class="text-gray-700 font-bold mt-4">Server Uptime</h4>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="relative w-24 h-24 mx-auto animate-spin-slow">
                        <svg class="w-24 h-24" viewBox="0 0 36 36">
                            <circle class="text-gray-200" stroke-width="4" fill="none" cx="18" cy="18" r="15.9155" />
                            <circle class="text-red-500" stroke-width="4" fill="none" stroke-dasharray="85, 100" cx="18" cy="18" r="15.9155" stroke-linecap="round"/>
                        </svg>
                        <span class="absolute inset-0 flex items-center justify-center text-xl font-bold text-red-500">85%</span>
                    </div>
                    <h4 class="text-gray-700 font-bold mt-4">Storage Used</h4>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>