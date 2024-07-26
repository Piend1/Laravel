@extends('layout')

@section('content')
    <h1>Todo</h1>
    <a href="{{ route('todo.create') }}">+ Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Todo</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $no =1;
            ?>
            @foreach($todos as $todo)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $todo->todo }}</td>
                <td>{{ $todo->keterangan }}</td>
                <td>
                    <a href="{{ url("/todo/{$todo->id}") }}">Edit</a>
                    <form action="{{ url("/todo/{$todo->id}") }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection