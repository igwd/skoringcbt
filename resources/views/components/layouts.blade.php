<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            /* Ensure the sidebar is hidden by default on small screens */
            @media (max-width: 767px) {
                .sidebar-hidden {
                    display: none;
                }
            }
        </style>
        @stack('styles')
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="flex h-screen antialiased font-sans bg-gray-200 overflow-hidden dark:bg-black dark:text-white/50" x-data="{ sidebarOpen: false }">
        <!-- Sidebar -->
        <div :class="{'w-16': !sidebarOpen, 'w-64': sidebarOpen}" class="flex min-h-0 flex-col bg-blue-700 w-16 md:w-64">
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                <!-- Toggle Button -->
                <div class="flex items-center justify-between p-4" @click="sidebarOpen = !sidebarOpen">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300" alt="Logo">
                </div>
                <nav class="mt-5 flex-1 space-y-1 px-2" aria-label="Sidebar">
                    <a href="#" class="bg-blue-800 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="flex-1 sm:hidden" x-show="sidebarOpen">Dashboard</span>
                    </a>
                    <a href="#" class="text-indigo-100 hover:bg-blue-800 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <span class="flex-1 sm:hidden" x-show="sidebarOpen">Periode Pendaftaran</span>
                    </a>
                    <a href="#" class="text-indigo-100 hover:bg-blue-800 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            {{-- <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /> --}}
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="flex-1 sm:hidden" x-show="sidebarOpen">Daya Tampung</span>
                        <span class="bg-blue-800 ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full sm:hidden" x-show="sidebarOpen">3</span>
                    </a>
                    {{-- <a href="#" class="text-indigo-100 hover:bg-blue-800 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="flex-1">Projects</span>
                        <span class="bg-blue-800 ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full">4</span>
                    </a> --}}
                    
                    <a href="#" class="text-indigo-100 hover:bg-blue-800 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                        </svg>
                        <span class="flex-1 sm:hidden" x-show="sidebarOpen">Documents</span>
                        <span class="bg-blue-800 ml-3 inline-block py-0.5 px-3 text-xs font-medium rounded-full sm:hidden" x-show="sidebarOpen">12</span>
                    </a>
                    <a href="#" class="text-indigo-100 hover:bg-blue-800 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="mr-3 h-6 w-6 flex-shrink-0 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                        <span class="flex-1 sm:hidden" x-show="sidebarOpen">Reports</span>
                    </a>
                </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-blue-800 p-4">
                <a href="#" class="group block w-full flex-shrink-0">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3 sm:hidden" x-show="sidebarOpen">
                            <p class="text-sm font-medium text-white">Tom Cook</p>
                            <p class="text-xs font-medium text-indigo-200 group-hover:text-white">View profile</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
           
        <div class="flex flex-1 min-h-0 overflow-y-auto p-4">      
            @yield('content')
            @isset($slot)
                {{ $slot }}
            @endisset
        </div>
        @livewireScripts
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if(session()->has('livewire-alert'))
                    @php $alert = session('livewire-alert') @endphp
                    Livewire.emit('showAlert', '{{ $alert['type'] ?? "success" }}', '{{ $alert['title'] ?? "" }}', '{{ $alert['message'] ?? "" }}', '{{ $alert['position'] ?? "bottom-right" }}');
                @endif
            });
        </script>    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        @stack('scripts')
    </body>
</html>
