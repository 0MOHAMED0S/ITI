@extends('layouts.layout_app')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archive') }}
        </h2>
      </x-slot>

        <!-- Container fluid -->
        <div class="container mt-4" style="max-width: 85%;">
    <!-- Start Page Content -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Proudects Archive</h5>
                  <div class="table-responsive">
                    @if (Session::has('msg'))
                <div class="card-body">
                <div class='alert alert-success'>{{ Session::get('msg')}}</div>
                 </div>
                @endif
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                          
                         
                         @forelse( $Products as $product )
                         <tr>
                           <td>{{ $product->id}}</td>
                           <td>{{ $product->name }}</td>
                           <td>{{ $product->description }}</td>
                           <td>{{ $product->price }}</td>
                           <td>
                            <a href="{{route('admin.product.restore',[$product->id])}}" class="btn btn-warning ">Restore</a>
                           <form method="post" class="d-inline-block" 
                           action="{{route ('admin.product.forcedelete',[$product->id])}}">
                            @csrf
                            @method('delete')
                           <input type="submit" class="btn btn-danger" value="delete">
                           </form>
                          </td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan='5' class="text-center">No Data</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
          </div>
        </div>
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->
        
</x-app-layout>
@endsection
