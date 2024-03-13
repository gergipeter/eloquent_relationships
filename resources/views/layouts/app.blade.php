<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent Relationships</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Eloquent Relationships</a>

            <!-- Navbar toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Students -->
                    <li class="nav-item {{ Request::is('students*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <!-- Courses -->
                    <li class="nav-item {{ Request::is('courses*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                    </li>
                    <!-- Teachers -->
                    <li class="nav-item {{ Request::is('teachers*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a>
                    </li>
                    <!-- Payments -->
                    <li class="nav-item {{ Request::is('payments*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('payments.index') }}">Payments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <!-- Add your footer content here -->
        <div class="container">
            <span class="text-muted">&copy; {{ date('Y') }}</span>
        </div>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
