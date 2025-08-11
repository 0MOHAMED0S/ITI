@extends('Layouts.layout_app')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Categorie') }}
        </h2>
         </x-slot>
        <!-- Container fluid -->
        <div class="container mt-4" style="max-width: 85%;">
    <!-- Start Page Content -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{route('admin.categorie.add_categorie') }}" enctype="multipart/form-data" method="post">
                  @csrf
                  
                  @if ($errors->any())                    
                  <div class="card-body">
                    <div class='alert alert-danger'>
                      <ul>
                        @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  @endif

                  <div class="card-body">
                    @if (Session::has('msg'))
                    <div class='alert alert-success'>{{ Session::get('msg')}}</div>
                    @endif
                  </div>

                  <div class="card-body">
                    <div class="form-group row">
                      <label
                        for="Name"
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
                          value="{{ old('name') }}"
                        />
                      </div>
                    </div>


                    </div>



                    </div>
                  </div>
                  
                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">
                        Add
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

        </div>
</x-app-layout>
@endsection