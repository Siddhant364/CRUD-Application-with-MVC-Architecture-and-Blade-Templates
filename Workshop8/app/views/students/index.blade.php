@extends('layouts.master')

@section('title', 'Student List')

@section('content')
    <a href="{{ BASE_URL }}/index.php?action=create" class="btn btn-success">Add New Student</a>
    <br><br>
    
    @if(count($students) > 0)
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['email'] }}</td>
                <td>{{ $student['course'] }}</td>
                <td>
                    <a href="{{ BASE_URL }}/index.php?action=edit&id={{ $student['id'] }}" class="btn">Edit</a>
                    <a href="{{ BASE_URL }}/index.php?action=delete&id={{ $student['id'] }}" 
                       class="btn btn-danger" 
                       onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <p>No students found.</p>
    @endif
@endsection
