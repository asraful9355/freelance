@extends('backend.master')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Add Menu</h2>
            </div>            
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                </ul>
                <a href="{{ route('menu.index') }}" class="btn btn-sm btn-primary" title="">All Menu</a>
            </div>
        </div>
    </div>    
    <div class="container-fluid">           

        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card">
                   
                    <div class="body">
                     <form method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                        @csrf
                           <div class="form-group">
                           <label for="name_en">Menu Name (English): <span class="text-danger">*</span></label>
                           <input type="text" name="name_en" value="" id="name_en" class="form-control" placeholder="Write menu Title English">
                           @error('name_en')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label for="name_bn">Menu Name (Bangla): <span class="text-danger">*</span></label>
                           <input type="text" name="name_bn" value="" id="name_bn" class="form-control" placeholder="Write menu Title Bangla">
                           @error('name_bn')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                         </div>
                            
                         <div class="form-group">
                           <label for="status">Status</label>
                            <span class="text-danger">*</span>
                           <select name="status" id="status" class="form-control">
                               <option value="1">Active</option>
                               <option value="0">Disable</option>
                           </select>
                       </div>
                            
                            
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>




            
            </div>

            
        </div>
    </div>
</div>
@endsection