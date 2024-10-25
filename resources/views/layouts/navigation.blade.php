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

        <div>
            <img src="{{url('storage/images/profile-pictures/user.png')}}">
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
</script>
</body>
</html>
