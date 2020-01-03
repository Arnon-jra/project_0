@extends('app')

@section('title', 'Services')

@section('content')

<h1>Services</h1>
    <ul>
    @forelse($services as $service)
        {{dd($service->name)}}
        <!-- <li>{{ $service->name }}</li>  -->
        <!-- doesnt show up dont know why. with dd() works. -->
    @empty
        <li>No services available</li>
    @endforelse
    </ul>

@endsection

