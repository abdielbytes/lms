<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Cards</title>
    @vite(['resources/css/admin-dash.css', 'resources/js/app.js'])
</head>
<body>
<div class="full-page-screen">

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
    </div>

    <div class="statistic-cards">
        <div class="statistic-card">
            <img src="./images/total.png" alt="Total Users">
            <h3>204 Users</h3>
        </div>
        <div class="statistic-card">
            <img src="./images/active.png" alt="Academies">
            <h3>30 Academies</h3>
        </div>
        <div class="statistic-card">
            <img src="./images/active.png" alt="Active Users">
            <h3>201 Active Users</h3>
        </div>
        <div class="statistic-card">
            <img src="./images/inactive.png" alt="Inactive Users">
            <h3>3 Inactive Users</h3>
        </div>
        <div class="statistic-card">
            <img src="./images/disabled.png" alt="Disabled Users">
            <h3>0 Disabled Users</h3>
        </div>
    </div>

    <div class="dashboard-middle-section">
        <div class="top-tracks">
            <h2>Top Tracks</h2>
            <ul>
                <li>Track 1 - Academy A</li>
                <li>Track 2 - Academy B</li>
                <li>Track 3 - Academy C</li>
                <li>Track 4 - Academy D</li>
                <li>Track 5 - Academy E</li>
            </ul>
            <button class="view-all">View All</button>
        </div>
        <div class="notifications-section">
            <h2>Notifications</h2>
            <ul>
                <li>User X commented on your post</li>
                <li>User Y liked your profile</li>
                <li>New academy available: Academy Z</li>
                <li>Reminder: Upcoming event on 10/30</li>
                <li>System update completed successfully</li>
            </ul>
            <button class="view-all">View All</button>
        </div>
    </div>

    <div class="log-section">
        <h2>Change Log</h2>
        <ul>
            <li><strong>Version 1.0:</strong> Initial release with user management features. (Date: 2024-01-15)</li>
            <li><strong>Version 1.1:</strong> Added notifications system. (Date: 2024-02-10)</li>
            <li><strong>Version 1.2:</strong> Introduced academy management module. (Date: 2024-03-05)</li>
            <li><strong>Version 1.3:</strong> Bug fixes and performance improvements. (Date: 2024-04-20)</li>
            <li><strong>Version 1.4:</strong> Enhanced user interface for better accessibility. (Date: 2024-05-30)</li>
        </ul>
        <button class="view-all">View All</button>
    </div>
</div>

<a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Dreamstale - Flaticon</a>

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
