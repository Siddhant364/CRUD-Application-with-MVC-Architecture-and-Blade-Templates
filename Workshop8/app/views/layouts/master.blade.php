<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Student Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .container { max-width: 1200px; margin: 0 auto; }
        .btn { display: inline-block; padding: 8px 16px; text-decoration: none; background: #007bff; color: white; border-radius: 4px; }
        .btn-danger { background: #dc3545; }
        .btn-success { background: #28a745; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="email"] { width: 300px; padding: 8px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Management System</h1>
        <hr>
        @yield('content')
    </div>
</body>
</html>
