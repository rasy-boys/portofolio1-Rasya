<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rasya Portfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Navbar Styling */
        .navbar {
            background-color: transparent !important;
            border-bottom: !important;
            z-index: 1030 !important; /* Ensure it stays on top of other elements */ /
            margin-bottom: 20px ; /* Tambahkan jarak */
            
        }

        .navbar .nav-link {
            color: #222 !important;
            font-size: 0.875rem !important;
            padding: 0.75rem 1.5rem !important;
            transition: all 0.3s ease;
            font-weight: bold !important;
            font-family: 'Roboto', sans-serif;
        }

        .navbar .nav-link:hover {
            color: #0f3ad8 !important;
            transform: scale(1.2) !important;
        }

        /* Active Link Styling */
        .navbar .nav-item.active .nav-link {
            background: linear-gradient(to right, #6a1b9a, #1e88e5) !important;
            color: #f0f0f0 !important;
            padding: 0.75rem 1.5rem !important;
            border-radius: 5px !important;
            font-weight: bold !important;
        }

        /* Dropdown Styling */
        .navbar .dropdown-menu {
            background-color: #222 !important;
            border: none !important;
        }

        .navbar .dropdown-item {
            color: #fff !important;
        }

        .navbar .dropdown-item:hover {
            background-color: #333 !important;
            color: #ccc !important;
        }

        .navbar-toggler {
            border-color: #fff !important;
        }

        .navbar-toggler .icon-bar {
            background-color: #fff !important;
        }

        /* Add Padding to the Logo */
        .navbar-brand {
            margin-right: auto; /* Push the menu to the right */
        }

        /* To Prevent Content Overlap */
        body {
            padding-top: 70px; /* Add padding equal to the navbar height */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <!-- Logo on the Left -->
            <a class="navbar-brand logo_h" href="index.html">
                <img src="asset-lending-page/img/rasya.png" style="width: 100px; height: auto;" alt="logo">
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item {{ Request::is('homes') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('homes.index') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item {{ Request::is('skills') ? 'active' : '' }}">
                        <a class="nav-link" href="/skills">Skills</a>
                    </li>
                    <li class="nav-item {{ Request::is('certificate') ? 'active' : '' }}">
                        <a class="nav-link" href="/certificate">Certificate</a>
                    </li>
                    <li class="nav-item {{ Request::is('project') ? 'active' : '' }}">
                        <a class="nav-link" href="/project">Project</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
