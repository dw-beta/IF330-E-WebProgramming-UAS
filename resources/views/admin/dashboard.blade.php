<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="showSection('userStatistics')">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('users')">
                                Users
                            </a>
                        </li>
                        <!-- Add more sidebar items as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container mt-4">
                    <div id="userStatistics" class="dashboard-section">
                        <h1 class="mb-4">Welcome to the Admin Dashboard</h1>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        User Statistics
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Total Users: {{ $totalUsers }}</p>
                                        <p class="card-text">Active Users: {{ $activeUsers }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Recent Activities
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            @foreach($recentActivities as $activity)
                                                <li class="list-group-item">{{ $activity }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3>Latest Users</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($latestUsers as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="users" class="dashboard-section" style="display: none;">
                        <!-- Move the content for the 'Users' section here -->
                        <!-- This is where you can add content specific to the 'Users' section -->
                    </div>
                    <!-- Add more content sections as needed -->
                </div>
            </main>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.dashboard-section').forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
@endsection
