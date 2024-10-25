<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cards</title>
    @vite(['resources/css/admin-dash.css', 'resources/js/app.js'])
</head>
<body>

    <div class="navigation-bar">
        <div class="burger-menu">&#9776;</div>
        <div class="sidebar">
            <div class="block-dom"></div>
            <div class="sidebar-content">
                <button class="btn close-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#users">Users</a></li>
                    <li><a href="#academies">Academies</a></li>
                    <li><a href="#assignments">Assignments</a></li>
                    <li><a href="#grades">Grades</a></li>
                    <li><a href="#notifications">Notifications</a></li>
                    <li><a href="#reports">Reports</a></li>
                    <li><a href="#settings">Settings</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#logout">Logout</a></li>
                </ul>
            </div>
        </div>

        <div id="profile-image" class="drop-container">

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-black dark:bg-black hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex mr-1 ms-1">

                                <img id="profile-image" class="profile-image" src="{{url('storage/images/profile-pictures/girl.png')}}">

                                <svg class=" fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.querySelector(".sidebar");
        const burgerMenu = document.querySelector(".burger-menu");
        const closeSideBar = document.querySelector(".close-sidebar");
        const blockDom = document.querySelector(".sidebar .block-dom");

        // Toggle the sidebar visibility
        function toggleSidebar() {
            sidebar.classList.toggle("show");
        }

        // Add event listeners
        burgerMenu.addEventListener("click", toggleSidebar);
        closeSideBar.addEventListener("click", toggleSidebar);
        blockDom.addEventListener("click", toggleSidebar);
    });
    // document.getElementById('profile-image').addEventListener('click', function() {
        // alert('Hello');
    // });

</script>
</body>
</html>
