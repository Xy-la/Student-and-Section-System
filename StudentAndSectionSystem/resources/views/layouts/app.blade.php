<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student & Section System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }

        /* Sidebar - Transparent Glass */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: rgba(33, 37, 41, 0.75);
            backdrop-filter: blur(12px);
            box-shadow: 3px 0 15px rgba(0, 0, 0, 0.4);
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            transition: all 0.3s ease;
        }

        .sidebar h4 {
            font-weight: bold;
            text-transform: uppercase;
            color: #ffc107;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 2px;
            text-shadow: 0 0 8px rgba(255, 193, 7, 0.5);
        }

        .sidebar a {
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 5px 10px;
            background: rgba(255, 255, 255, 0.05);
        }

        .sidebar a:hover {
            background: rgba(255, 193, 7, 0.2);
            transform: translateX(5px);
            color: #ffc107;
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.4);
        }

        .sidebar a i {
            font-size: 1.2rem;
        }

        /* Content */
        .content {
            flex-grow: 1;
            margin-left: 240px;
            padding: 20px;
        }

        /* Navbar Title - Transparent Glass */
        .navbar-custom {
            background: rgba(33, 37, 41, 0.75);
            backdrop-filter: blur(12px);
            padding: 18px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4), 0 0 15px rgba(255, 193, 7, 0.3);
            transition: all 0.3s ease;
        }

        .navbar-custom:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.6), 0 0 25px rgba(255, 193, 7, 0.6);
            transform: scale(1.02);
        }

        .navbar-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.8rem;
            color: #ffc107;
            letter-spacing: 3px;
            text-shadow: 0 0 8px rgba(255, 193, 7, 0.6);
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Menu</h4>
        <a href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="{{ route('students.index') }}"><i class="bi bi-people-fill"></i> Students</a>
        <a href="{{ route('sections.index') }}"><i class="bi bi-journal-bookmark-fill"></i> Sections</a>
        <a href="{{ route('transactions.index') }}"><i class="bi bi-arrow-left-right"></i> Transactions</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="navbar-custom mb-3">
            <span class="navbar-title">STUDENT & SECTION SYSTEM</span>
        </div>

        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>