@extends('layouts.app')


@section('kotak_hijau')

<div class="container">

<form>
	
    <div class="modal-header">
      <h4 class="modal-title"><i class="fa fa-plus"></i>Search</h4>
      </div>
    <div class="modal-body">
    <div class="row">
    <div class="form-group col-md-4">
       <label>Category</label>
       <select name="category" id="category" class="form-control" data-live-search="true"  >
                      <option value=''>Select Category</option>


        </select> 
    </div>
    <div class="form-group col-md-4">
       <label>Area</label>
          <select name="area" id="area" class="form-control" data-live-search="true"  >
          <option value=''>Select Area</option>

          </select>
    </div>

    </div>
    </div>
    <div class="modal-footer">
    <div class="text-left">
    <input type="button" name="is_search" id="is_search" value="Search" class="btn btn-primary" />
    </div>
    </div>
  </form>

  <div class="modal-body">
						<div class="row" id="show_product"> 
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading"><strong>Data</strong></div>
											<div class="panel-body" aling="center">
											<div class="table-responsive">
												<table class="table table-bordered table-condensed hidden-xs">
													
												</table>
											</div>
											
											</div>
										</div>
									</div>
								</div>																			
						</div>  
					</div> 

</div>

@endsection

@section('kotak_merah')



@endsection
