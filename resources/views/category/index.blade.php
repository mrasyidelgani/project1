@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>

                <a href="{{route('categories.create')}}">Tambah Data</a>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @forelse($categories as $category)
                        <tr>
                            <th>{{$category->id}}</th>
                            <th>{{$category->name}}</th>
                            <th></th>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="3">Data Belum Ada</th>
                        </tr>
                        @endforelse
                    </table>

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
