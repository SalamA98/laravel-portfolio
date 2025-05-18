<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">
    
</head>
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<body>
    <!-- Top header -->
    <!-- Toggle Sidebar Button -->
    <div class="bg-dark p-2 d-flex justify-content-between align-items-center">
        <button class="btn btn-outline-light" id="toggleSidebar">☰</button>

        <h2 class="text-white">👩‍💻 Salam Arida</h2>

        <form action="{{ route('logout') }}" method="POST" class="mb-0">
            @csrf
            <button type="submit" class="btn btn-sm btn-danger" class="ti-email">Logout</button>
        </form>
    </div>

    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-dark text-white p-3" style="min-width: 200px; min-height: 100vh; transition: all 0.3s;">
            <h4 class="text-center">Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('about.edit') }}" class="nav-link text-white">About Me</a></li>
                <li class="nav-item"><a href="{{ route('projects.index') }}" class="nav-link text-white">Projects</a></li>
                <li class="nav-item"><a href="{{ route('certificates.index') }}" class="nav-link text-white">Certificates</a></li>
                <li class="nav-item"><a href="{{ route('message.index') }}" class="nav-link text-white">Messages</a></li><br>
                <li class="nav-item"><a href="{{ route('user.edit') }}" class="nav-link text-white">change password</a></li>
            </ul>
        </div>

            <!-- Main content -->
            <div class="flex-grow-1 p-4">
                <h3 class="mb-4">@yield('title')</h3>
                @yield('content')
            </div>
    </div>
    @include('partials.scripts')
</body>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('d-none');
    });
</script>
</html>