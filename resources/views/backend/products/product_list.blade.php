@extends('backend_layout')

@section('main_content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="page-title">Product List</h2>

        <div class="row justify-content-center">
          <!-- simple table -->
          <div class="col-md-10 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">All Product
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right">Add Product</a>
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
                      <th>Product Name</th>
                      <th>Product Long Description</th>
                      <th>Product Short Description</th>
                      <th>Product Price</th>
                      <th>Product Image</th>
                      <th>Category Name</th>
                      <th>Menufacture Name</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_product_info as $product_item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product_item->product_name }}</td>
                            <td>{{ $product_item->product_long_description }}</td>
                            <td>{{ $product_item->product_short_description }}</td>
                            <td>{{ $product_item->product_price }}</td>
                            <td><img src="{{asset('image/'.$product_item->product_image)}}" alt=""></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $all_product_info->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
