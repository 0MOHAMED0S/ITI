@extends('layouts.layout_app')
@section('content')
<x-app-layout>
   
      <!-- Bread crumb -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Products') }}
            </h2>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.product.table_product') }}"> All product</a></li>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#"> Edit product</a></li>
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
                <form class="form-horizontal" action="{{route('admin.product.update', $Product->id) }}" enctype="multipart/form-data" method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    @if (Session::has('msg'))
                    <div class='alert alert-success'>{{ Session::get('msg')}}</div>
                    @endif
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label
                        for="name"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder=" Name Here"
                          name="name"
                          value="{{ $Product->name}}"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="price"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Price</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number"
                          class="form-control"
                          id="price"
                          placeholder="Price Here"
                          name="price"
                          value="{{$Product->price}}"
                          />
                        </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="description"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Description</label
                      >
                      <div class="col-sm-9">
                        {{-- <input
                          type="text"
                          class="form-control"
                          id="price"
                          placeholder="description Here"
                          name="description"
                        /> --}}
                        <textarea class="form-control"id="description"
                        name="description">{{$Product->description}}</textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="image"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Image</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="file"
                          class="form-control"
                          id="image"
                          placeholder=""
                          name="image"
                        />
                      @if ($Product->image)
                      <img src="{{ asset('storage/Product/' . $Product->image) }}" alt="Current Image" style="max-width: 150px; margin-top: 10px;">
                      @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="Categories"
                        class="col-sm-3 text-end control-label col-form-label"
                        >categorie</label
                      >
                      
                      <div class="col-sm-9">
                        <select class="form-select" name="categorie_id" >
                          @foreach ($Categories as $categorie )
                           <option value="{{ $categorie->id }}" @if ($categorie->id == $Product->categorie_id)
                            selected
                           @endif >{{ $categorie->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="border-top">
                    <div class="card-body">
                    <a href="{{route('admin.product.table_product')}}" 
                    class="btn btn-primary">Back</a> 
                      <button type="submit" class="btn btn-primary">
                        Save
                      </button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->
        
</x-app-layout>
@endsection
