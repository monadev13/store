@extends('admin.layouts.master')
@section('title')
 Create Slider
@endsection
@section('css')
@endsection
@section('page-header')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>CreateSlider</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">CreateSlider</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Admin Slider</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="{{ route('slider.store') }}"  enctype="multipart/form-data">
            @csrf

            @if(session()->has('message'))
              <div class="alert alert-success  form-group my-3 mx-auto col-md-6">
                {{session()->get('message')}}
              </div>
            @endif


            <div class="card-body">
              <div class="form-group">
                <label for="formFile">Image</label>
                <input type="file" class="form-control @error('img') is-invalid fparsley-error parsley-error  @enderror" id="formFile" placeholder="image" name="image" value="{{old('img',$slider->img ?? '')}}">
                @error('img')
                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                  <p>{{$message}}</p>
                </span>

                @enderror
              </div>
            </div><!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section><!-- /.content -->

@endsection
@section('js')
@endsection
