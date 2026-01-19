@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
    <h2>Add New Student</h2>
    
    <form method="POST" action="{{ BASE_URL }}/index.php?action=store">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" required>
        </div>
        
        <button type="submit" class="btn btn-success">Add Student</button>
        <a href="{{ BASE_URL }}/index.php?action=index" class="btn">Cancel</a>
    </form>
@endsection
