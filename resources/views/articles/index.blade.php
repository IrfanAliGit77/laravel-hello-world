@extends('layouts.app') 
@section('content') 
@if ($message = Session::get('success')) 
        <div class="alert alert-success"> 
            <p>{{ $message }}</p> 
        </div> 
    @endif 
    <div class="row">
        <div style="margin: 0 10% 0 10%;">
            <a href="{{ route('cetak_pdf') }}" class="btn btn-success">Cetak PDF</a>
            <a href="{{ route('articles.create') }}" class="btn btn-primary" style="margin-left: 10px;">Tambah Artikel</a>
        </div>
    </div><br>
    <table class="table table-bordered table-hover" style="width:80%;margin: 0 auto;"> 
        <tr> 
            <th>Judul</th> 
            <th>Konten</th> 
            <th>Gambar</th> 
        </tr> 
        @foreach ($articles as $article) 
        <tr> 
            <td><a href="{{ route('articles.edit', ['article'=>$article->id]) }}">{{ $article->title  }}</a></td> 
            <td>{{ $article->content }}</td> 
            <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
        </tr> 
        @endforeach 
    </table> 
@endsection 