@extends('layouts.app')

@section('title', '新規投稿')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-2">
        <a class="text-decoration-none" href="{{ route('posts.index') }}">&lt; 戻る</a>
    </div>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="title">タイトル</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group mb-3">
            <label for="content">本文</label>
            <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
        </div>
        <button class="btn btn-outline-primary" type="submit">投稿</button>
    </form>
@endsection
