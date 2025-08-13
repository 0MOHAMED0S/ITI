@extends('Layouts.layout_app')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All products') }}
        </h2>
         </x-slot>

            <div class="container mt-4" style="max-width: 85%;">
    <!-- Start Page Content -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Product Datatable</h5>
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
                          <th>Price</th>
                          <th>Categories</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         
                          
                         
                         @forelse( $Products as $product )
                         <tr>
                           <td>{{ $product->id}}</td>
                           <td>{{ $product->name }}</td>
                           <td>{{ $product->price }}</td>
                           <td>{{ $product->Categorie->name ?? 'No Category' }}</td>
                           <td>{{ $product->description }}</td>
                           <td>
                            <a href="{{route('admin.product.show',[$product->id])}}" class="btn btn-info ">Details</a>
                            <a href="{{route('admin.product.edit',[$product->id])}}" class="btn btn-warning ">Edait</a>
                           <form method="post" class="d-inline-block" 
                           action="{{route ('admin.product.delete',[$product->id])}}">
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
                    
                    <div class="card-body">
                    {{-- <a href="{{route('admin.proudect.create')}}" class="btn btn-primary">Add New</a>  --}}
                     </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
          <!-- End Page Content -->
        </div>

</x-app-layout>
@endsection