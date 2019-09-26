@extends('layouts.app')

@section('kotak_hijau')
<div class="container">
  <div class="row">
  <div class="col-md-12">

          <h1 class="title">{{ $product->name}}</h1>
          
          <p>
            <a href="/products/{{$product->id}}/edit">edit</a>
          </p>

          <div class="content">Quantity :{{$product->quantity}}</div>

          <div class="content">Price : {{$product->price}}</div>

        @if($product->attributes->count())
          <div> 
            @foreach ($product->attributes as $attribute)

              <div>
                
                <form method="POST" action="/attributes/{{ $attribute->id}}">
                @method ('PATCH')
                @csrf
                  <label class="checkbox {{$attribute->status ? 'is-complete' : '' }}" for="status">

                      <input type="checkbox" name="status" onChange="this.form.submit()" {{$attribute->status ? 'checked' : '' }}>    
                      {{ $attribute->name }}
                  </label>

                </form>
              
              
               
              </div>

            @endforeach

          </div>
        @endif
      <div class="card">
        <div class="card-header">
            <a>add product</a>
        </div>
        <div class="card-body">
                <form method="POST" action="/product/{{$product->id}}/attributes">
                  @csrf
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description">

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Attribute') }}
                        </button>
                    </div>
                  </div>               
              </form>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection