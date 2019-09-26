@extends('layouts.app')

@section('kotak_hijau')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Category') }}</div>

                <div class="card-body">

                    <form method="POST" action="">
                        @csrf
                        @method ('patch')

                        <div class="form-group row">
                            <label for="categoryName" class="col-md-4 col-form-label text-md-right">{{ __('categoryName') }}</label>

                            <div class="col-md-6">
                                <input id="categoryName" type="text" class="form-control @error('categoryName') is-invalid @enderror" name="categoryName" value="{{ $category->categoryName }}"  autocomplete="categoryName" autofocus>

                                @error('categoryName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Category') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--<form>
                             Button trigger modal 
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $category->id }}">
                            Delete
                            </button>-->

                            <!-- Modal 
                            <div class="modal fade" id="modal-delete-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">

                                <form method="POST" action="/categories/{{ $category->id }}">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    @csrf
                                    @method('DELETE')
                                    Are you sure to delete this?
                                                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">CONFIRM</button>
                                    </div>
                                    </div>
                                </form>-->
                            </div>
                            </div>                   
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
