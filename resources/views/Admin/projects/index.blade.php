<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Asya - Project List</title>
    <!-- Custom fonts & styles -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('asset-lending-page/css_admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3">Admin Asya</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>
            <li class="nav-item active"><a class="nav-link" href="{{ route('admin.homes.index') }}"><i class="fas fa-fw fa-home"></i><span>Home</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.abouts.index') }}"><i class="fas fa-fw fa-info-circle"></i><span>About</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.skills.index') }}"><i class="fas fa-fw fa-lightbulb"></i><span>Skills</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="fas fa-fw fa-folder"></i><span>Projects</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.contacts.index') }}"><i class="fas fa-fw fa-address-book"></i><span>Contacts</span></a></li>
            <hr class="sidebar-divider d-none d-md-block">
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Asya Fattah</span>
                                <img class="img-profile rounded-circle" src="{{ asset('asset-lending-page/css_admin/img/undraw_profile.svg') }}">
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Project List</h1>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create New Project</a>
                    </div>

                    <div class="card shadow mb-4 border-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="projectTable" class="table table-hover table-bordered" style="width: 95%; margin: 30px auto;">
                                    <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Link</th>
                                            <th>Date</th>
                                            <th>Thumbnail</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td><a href="{{ $project->link }}" target="_blank">Visit Link</a></td>
                                                <td>{{ $project->date }}</td>
                                                <td>
                                                    @if($project->thumbnail)
                                                        <img src="{{ asset('thumbnails/' . $project->thumbnail) }}" alt="Thumbnail" style="width: 100px; height: auto;">
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </td>
                                                
                                                <td class="text-center">
                                                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="{{ route('admin.projects.destroy', $project->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                                                        @csrf
                                                        @method('DELETE')
                                                       
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white text-dark py-3 mt-4 text-center">
                    <div class="container my-auto"><span>&copy; My Website 2024</span></div>
                </footer>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    <!-- JS Dependencies -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#projectTable').DataTable();
        });
    </script>
</body>
</html>
