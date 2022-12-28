@extends('backend.master')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Edit Menu</h2>
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
                     <form method="post" action="{{ route('menu.update',$menu->id) }}" enctype="multipart/form-data">
                        @csrf
                           <div class="form-group">
                           <label for="name_en">Menu Name (English): <span class="text-danger">*</span></label>
                           <input type="text" name="name_en" id="name_en" class="form-control" value="{{ $menu->name_en }}">
                           @error('name_en')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                         </div>
                         <div class="form-group">
                           <label for="name_bn">Menu Name (Bangla): <span class="text-danger">*</span></label>
                           <input type="text" name="name_bn" id="name_bn" class="form-control" value="{{ $menu->name_bn }}">
                           @error('name_bn')
                             <span class="text-danger">{{ $message }}</span>
                           @enderror
                         </div>
                            
                         <div class="form-group pl-4">

                           <div class="controls">
                               <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status"  value="1" {{ $menu->status == 1 ? 'checked': '' }}>
                               <label class="form-check-label cursor" for="status">Status</label>
                           </div>
                         </div>
                            
                            
                            <br>
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                    </div>
                </div>




            
            </div>

            
        </div>
    </div>
</div>
@endsection