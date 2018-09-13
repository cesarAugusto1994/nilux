@extends('admin.templates.index')

@section('title', 'Banners')

@section('links')

<a href="{{ route('banners.create') }}" class="btn btn-success">Novo</a>

@endsection
