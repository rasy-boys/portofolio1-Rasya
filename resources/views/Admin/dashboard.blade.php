<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Asya - Dashboard</title>

    <!-- Custom fonts & styles -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Asya <sup>2</sup></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Interface</div>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.homes.index') }}">
                <i class="fas fa-fw fa-info-circle"></i><span>Home</span>
            </a>
        </li>


        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.abouts.index') }}">
                <i class="fas fa-fw fa-info-circle"></i><span>About</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.skills.index') }}">
                <i class="fas fa-fw fa-lightbulb"></i><span>Skills</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.certificates.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i><span>Certificate</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.projects.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i><span>Project</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i><span>Contact</span>
            </a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fas fa-search fa-sm"></i></button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Asya Fattah</span>
                            <img class="img-profile rounded-circle" src="{{ asset('asset-lending-page/css_admin/img/undraw_profile.svg') }}">
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Earnings (Monthly)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Annual) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Earnings (Annual)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tasks Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Tasks
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pending Requests
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

             <!-- Chart and Overview Section -->
             <div class="row">

                <!-- Earnings Overview Chart -->
                <div class="col-12"> <!-- Full width column -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-chart-line"></i> Earnings Overview 
                                <small class="text-muted ml-2">Your financial performance at a glance!</small>
                            </h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Task Completion Chart -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info">
                                <i class="fas fa-tasks"></i> Task Completion
                                <small class="text-muted ml-2">How much have you completed this month?</small>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="taskCompletionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Revenue Distribution Pie Chart -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-success">
                                <i class="fas fa-piggy-bank"></i> Revenue Distribution
                                <small class="text-muted ml-2">Where is your revenue coming from?</small>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie">
                                <canvas id="revenuePieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scripts -->

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

// Earnings Overview (Line Chart)
var ctx = document.getElementById('myAreaChart').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Earnings ($)',
            data: [5000, 10000, 7500, 12000, 15000, 20000],
            borderColor: '#4e73df',
            backgroundColor: 'rgba(78, 115, 223, 0.2)',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,  // Ensures the chart resizes automatically
        maintainAspectRatio: false,  // Allows resizing the chart freely
        
        plugins: {
            legend: {
                position: 'top',  // Position of the legend
            }
        },
       
    }
});

// Task Completion (Bar Chart)
var taskCtx = document.getElementById('taskCompletionChart').getContext('2d');
var myBarChart = new Chart(taskCtx, {
    type: 'bar',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Tasks Completed (%)',
            data: [60, 75, 85, 90],
            backgroundColor: '#36b9cc',
            borderColor: '#2c9faf',
            borderWidth: 1
        }]
    }
});

// Revenue Distribution (Pie Chart)
var revenueCtx = document.getElementById('revenuePieChart').getContext('2d');
var myPieChart = new Chart(revenueCtx, {
    type: 'pie',
    data: {
        labels: ['Product A', 'Product B', 'Product C', 'Service X'],
        datasets: [{
            data: [30, 40, 20, 10],
            backgroundColor: ['#ff6f61', '#4e73df', '#36b9cc', '#f39c12']
        }]
    },
    options: {
        responsive: true,  // Ensures the chart resizes automatically
        maintainAspectRatio: false,  // Allows resizing the chart freely
        cutoutPercentage: 50,  // Adjust this value to make the chart smaller (from 0 to 100)
        plugins: {
            legend: {
                position: 'top',  // Position of the legend
            }
        },
        // Optional: Define height and width explicitly
        aspectRatio: 1,  // 1:1 aspect ratio, makes the chart circular
    }
});


    </script>


</body>
</html>
