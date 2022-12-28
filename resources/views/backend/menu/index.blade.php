@extends('backend.master')
@section('content')
<div id="main-content">
   <div class="block-header">
      <div class="row clearfix">
         <div class="col-md-6 col-sm-12">
            <h2>All Menu</h2>
         </div>
         <div class="col-md-6 col-sm-12 text-right">
            <ul class="breadcrumb">
            </ul>
            <a href="{{ route('menu.create') }}" class="btn btn-sm btn-primary" title="">Create New</a>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row clearfix">
         <div class="col-lg-12">
            <div class="card">
               <div class="header">
                  <ul class="header-dropdown dropdown dropdown-animated scale-left">
                     <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                     <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                     <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                           <li><a href="javascript:void(0);">Action</a></li>
                           <li><a href="javascript:void(0);">Another Action</a></li>
                           <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <div class="body">
                  <div class="table-responsive check-all-parent">
                     <table class="table table-hover m-b-0 c_list">
                        <thead>
                           <tr>
                              <th>Serial</th>
                              <th>Menu Name En</th>
                              <th>Menu Name Bn</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($menus as $item)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->name_en }}</td>
                              <td>{{ $item->name_bn }}</td>
                              <td>
                                 @if($item->status == 1)
                                 <a href="{{ route('menu.in_active',['id'=>$item->id]) }}" class="btn btn-success ">Active</a>
                                 @else
                                 <a href="{{ route('menu.active',['id'=>$item->id]) }}" class="btn btn-danger">Disable</a>
                                 @endif
                              </td>
                              <td>
                                 <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-edit"></i></a>
                                 <a href="{{ route('menu.destroy', $item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection