@extends('backend_layout')

@section('main_content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="page-title">MenuFacture List</h2>

        <div class="row justify-content-center">
          <!-- simple table -->
          <div class="col-md-8 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">All MenuFacture
                    <a href="{{ route('menufacture.create') }}" class="btn btn-primary btn-sm float-right">Add New MenuFacture</a>
                </h5>

                @if(session()->has('added-sucess'))
                        <div class="alert alert-success">
                            <span>{{session('added-sucess')}}</span>
                        </div>
                        @endif

                @if(session()->has('alert-danger'))
                        <div class="alert alert-danger">
                            <span>{{session('alert-danger')}}</span>
                        </div>
                        @endif
                <table class="table table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>SL NO</th>
                      <th>MenuFacture Name</th>
                      <th>MenuFacture Description</th>
                      <th>MenuFacture Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($menufacture_list as $menufacture)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $menufacture->manufacture_name }}</td>
                            <td>{{ $menufacture->manufacture_description }}</td>
                            <td>
                                @if ($menufacture->menufacture_status ==1)
                                    <span class="btn btn-sm btn-success">Active</span>
                                @else
                                    <span class="btn btn-sm btn-danger">In Active</span>
                                @endif
                            </td>
                            <td class="d-flex text-center">
                                @if ($menufacture->menufacture_status==1)
                                    <a href="{{ route('unactive.brand',['menufacture'=>$menufacture->menufacture_id]) }}" style="margin-right: 5px" class="btn btn-danger btn-sm white">
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                @else
                                    <a href="{{ route('active.brand',['menufacture'=>$menufacture->menufacture_id]) }}" style="margin-right: 5px" class="btn btn-success btn-sm white">
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                @endif
                                <a style="margin-right: 5px"  href="{{ route('menufacture.edit',['menufacture'=>$menufacture->menufacture_id]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('menufacture.destroy',['menufacture'=>$menufacture->menufacture_id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button onclick="return confirm('Are You Sure !')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
