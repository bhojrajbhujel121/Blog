<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('backend.include.css')
    <title>Document</title>
    <style>
        /* Ensure the body does not overlap the fixed sidebar */
body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Fixed sidebar */
.main-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px; /* Adjust as needed */
    height: 100%;
    background: #343a40; /* Sidebar background color */
    color: #ffffff; /* Sidebar text color */
    overflow-y: auto; /* Allows scrolling if content exceeds viewport height */
    z-index: 1000; /* Ensure the sidebar is above other content */
}

/* Adjust content wrapper to avoid overlap with sidebar */
.content-wrapper {
    margin-left: 250px; /* Should match sidebar width */
    padding: 20px; /* Optional padding */
    background-color: #f4f6f9; /* Background color for the content area */
}

/* Responsive adjustments for mobile */
@media (max-width: 767px) {
    .main-sidebar {
        position: static;
        width: 100%;
        height: auto; /* Let the height adjust automatically */
    }
    .content-wrapper {
        margin-left: 0; /* Remove left margin on mobile */
    }
}

    </style>
</head>
<body>
    @include ('backend.include.header')
    @include ('backend.include.nav')
    {{--body--}}
    @yield('content')
    {{--body--}}
    <!-- @include ('backend.include.footer') -->

    @include('backend.include.js')
</body>
</html>