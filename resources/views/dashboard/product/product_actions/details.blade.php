@extends('layouts.layout_app')
@section('content')
<x-app-layout>
   
  
  
    <!-- Bread crumb -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Add Products') }}
              </h2>
                   <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.product.table_product') }}">All products</a></li>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">product Details</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid -->
        <div class="container mt-4" style="max-width: 85%;">
    <!-- Start Page Content -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Details</h5>
                  <div class="table-responsive">
            <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <tbody>
                        <tr>
                          <th class='w-25 bg-dark text-light'>Id</th>
                          <td>{{ $Product->id}}</td>
                        </tr>
                        
                        <tr>
                            <th class='w-25 bg-dark text-light'>Name</th>
                            <td>{{ $Product->name }}</td>
                        </tr>
                        
                        <tr>
                            <th class='w-25 bg-dark text-light'>Price</th>
                            <td>{{ $Product->price }}</td>
                        </tr>
                        
                        <tr>
                            <th class='w-25 bg-dark text-light'>Image</th>
                            <td><img src="{{ asset('storage/Product/'.$Product->image)}}" width="100"> </td>
                        </tr>
                        

                        <tr>
                            <th class='w-25 bg-dark text-light'>Category</th>
                            <td>{{ $Product->Categorie->name ?? 'No Category' }}</td>
                        </tr>
                        
                        <tr>
                            <th class='w-25 bg-dark text-light'>Description</th>
                            <td>{{ $Product->description }}</td>
                        </tr>
                        

                        <tr>
                            <th class='w-25 bg-dark text-light'>Created At</th>
                            <td>{{ $Product->created_at?? 'No Data'}}</td>
                        </tr>

                        <tr>
                            <th class='w-25 bg-dark text-light'>Updated At</th>
                            <td>{{ $Product->updated_at ?? 'No Data'}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
        <a href="{{route('admin.product.table_product')}}" class="btn btn-primary">Back</a> 
                 </div>
                </div>
            </div>
          </div>
        
</div>

</div>

</x-app-layout>
@endsection
