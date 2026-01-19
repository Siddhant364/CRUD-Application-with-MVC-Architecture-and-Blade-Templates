@extends('layouts.master')

@section('title', 'Edit Student')

@section('content')
    <h2>Edit Student</h2>
    
    <form method="POST" action="{{ BASE_URL }}/index.php?action=update&id={{ $student['id'] }}">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student['name'] }}" required>
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $student['email'] }}" required>
        </div>
        
        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="course" value="{{ $student['course'] }}" required>
        </div>
        
        <button type="submit" class="btn">Update</button>
        <a href="{{ BASE_URL }}/index.php?action=index" class="btn">Cancel</a>
    </form>
@endsection
