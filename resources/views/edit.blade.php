@extends('layout')

@section('title', 'แก้ไขบทความ')


@section('content')
    <h2 class="text text-center py-2">แก้ไขบทความ</h2>
    <form method="POST" action="{{ route('update', $blogs->id) }}">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control" value="{{ $blogs->title }}">
        </div>
        @error('title')
            <div my-2><span class="text-danger">{{ $message }}</span></div>
        @enderror
        <div class="form-group">
            <label for="title">เนื้อหา</label>
            <textarea name="content" class="form-control" cols="30" rows="5">{{ $blogs->content }}</textarea>
        </div>
        @error('content')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>

@endsection
