@extends('layouts.layout_app')
@section('content')
<x-app-layout>
        <!-- Bread crumb -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
            
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Categorie') }}
            </h2>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.categorie.table_categorie') }}"> All Categories</a></li>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#"> Edit categorie</a></li>
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
                <form class="form-horizontal" action="{{route('admin.categorie.update', $Categories->id) }}" enctype="multipart/form-data" method="post">
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
                        for="fname"
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
                          value="{{ $Categories->name}}"
                        />
                      </div>
                     </div>
                    </div>
                   </div>
                  </div>
                  
                  <div class="border-top">
                    <div class="card-body">
                                          <a href="{{route('admin.categorie.table_categorie')}}" class="btn btn-primary">Back</a> 
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
