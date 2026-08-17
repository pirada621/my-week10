@extends('layout')
@section('title')
    บทความ
@endsection
@section('content')
    <h2 class="text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">title</th>
                {{-- <td><th scope="col">content</th></td> --}}
                <th scope="col">status</th>
                <th scope="col">edit</th>
                <th scope="col">control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    {{-- <td>{{Str::limit($item->content,10)}}</td> --}}
                    <td>
                        @if ($item->status)
                            <a href="{{ route('change', $item->id) }}"class="btn btn-success">เผยแพร่</a>
                        @else
                            <a href="{{ route('change', $item->id) }}"class="btn btn-danger">ไม่เผยแพร่</a>
                        @endif
                    </td>
                    <td><a href="{{ route('edit', $item->id) }}"class="btn btn-warning">แก้ไข</a></td>
                    <td>
                        <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบบทความ{{ $item->title }}นี้จริงหรือไม่?')">ลบ</a>
                    </td>
            @endforeach
        </tbody>
    </table>
@endsection
