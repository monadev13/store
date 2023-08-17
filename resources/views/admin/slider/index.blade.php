@extends('admin.layouts.master')
@section('title')
 Slider
@endsection
@section('css')
@endsection
@section('page-header')
  <!-- breadcrumb -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Slider</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{rout('slider.create')}}" class="btn btn-block bg-gradient-primary"><i class="fa-solid fa-plus"></i> Add New Slider</a>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- breadcrumb -->
@endsection
@section('content')
  @if(session()->has('success'))
  <div class="alert alert-success  form-group my-3 mx-auto col-md-6">
    {{ session()->get('success') }}
  </div>
  @endif
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $sliders as $key=>$slider )
                  <tr>
                    <td>{{ $loop->treration }}</td>
                    <td><img width="200" src="{{ asset('storage/images/slider/'.$slider->img) }}" alt=""></td>
                    <td>
                      <a href="{{ route('slider.edit'.$id) }}" class="btn btn-info btn-icon ml-2" title="Edit details">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <form action="{{rout('slider.destroy' .$id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-info btn-icon ml-2 delete_form"  type="submit"><i class="fa-solid fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div><!-- /.card -->

      </div> <!-- /.col -->
    </div><!-- /.row -->
  </section>
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

@endsection
