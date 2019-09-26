@extends('layouts.app')

@section('kotak_hijau')
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-header">
    <a href="/categories/create" class="btn btn-primary">add Category</a>
</div>
<div class="card-body">
<table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category_list as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->categoryName }}</td>
                <td><a href="/categories/{{ $category->id }}/edit" class="btn btn-primary">EDIT</a>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $category->id }}">
                     Delete
                     </button>

                     <!-- Modal -->
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
                        </form>
                     </div>
                     </div>
                  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $category_list->links() }}
</div>
</div>
</div>
</div>
</div>
@endsection