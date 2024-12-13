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
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3">Admin Asya <sup>2</sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="dashboard"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>
            <li class="nav-item active"><a class="nav-link" href="{{ route('admin.homes.index') }}"><i class="fas fa-fw fa-home"></i><span>Home</span></a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('admin.abouts.index') }}"><i class="fas fa-fw fa-info-circle"></i><span>About</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.skills.index') }}"><i class="fas fa-fw fa-lightbulb"></i><span>Skills</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.certificates.index') }}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Certificate</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="fas fa-fw fa-folder"></i><span>Projects</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.contacts.index') }}"><i class="fas fa-fw fa-address-book"></i><span>Contacts</span></a></li>

            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search">
                            <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fas fa-search fa-sm"></i></button></div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Asya Fattah</span>
                            <img class="img-profile rounded-circle" src="{{ asset('asset-lending-page/css_admin/img/undraw_profile.svg') }}"></a>
                        </li>
                    </ul>
                </nav>
                <!-- Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Skills</h1>
                        <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Add New Skill</a>
                    </div>
                    <!-- Skills Table -->
                    <div class="card shadow mb-4 border-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered text-center" id="myTable" style="width: 90%; margin: 20px auto;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skills as $skill)
                                            <tr>
                                                <td>{{ $skill->title }}</td>
                                                <td>{{ $skill->description }}</td>
                                                <td>
                                                    @if($skill->image)
                                                        <img src="{{ asset('storage/' . $skill->image) }}" alt="Skill Image" width="50" height="50">
                                                    @else
                                                        No image
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.skills.show', $skill->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="{{ route('admin.skills.destroy', $skill->id) }}"  class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
                                                        @csrf
                                                        @method('DELETE')
                                                       
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
        function confirmDelete() { return confirm('Apa kamu yakin ingin menghapus skill?'); }
    </script>
</body>
</html>
