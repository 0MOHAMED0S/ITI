@extends('Layouts.layout_app')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-xl">
               {{-- {{ __("Welcome back to your dashboard! We're glad to have you here. Let's make today productive") }} --}}
            {{-- <div class="mt-4 ex justify-center">
                <img src="{{ asset('assets/images/ra3d.png') }}" alt="Ra3d Team" class="w-51 h-auto">
            </div> --}}
<div class="row">
    <!-- Orders Count -->
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-shopping-cart fa-2x mb-2"></i>
                <h5 class="card-title">Total Orders</h5>
                <h3>{{ $ordersCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Products Count -->
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-box fa-2x mb-2"></i>
                <h5 class="card-title">Total Products</h5>
                <h3>{{ $productsCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Categories Count -->
    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3 shadow">
            <div class="card-body text-center">
                <i class="fa fa-tags fa-2x mb-2"></i>
                <h5 class="card-title">Total Categories</h5>
                <h3>{{ $categoriesCount }}</h3>
            </div>
        </div>
    </div>
</div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection