@extends('master.app')

@section('titleContent')
    YELLOW | Product Create
@endsection

@section('cssScript')

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            USER CREATE
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/users"><i class="fa fa-dashboard"></i>User list</a></li>
            <li class="active">User create</li>
        </ol>
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add User</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br/>
                    @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['action' => 'UserController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('name', 'User Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'User Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'Email')}}
                            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('password', 'Password')}}
                            {{Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                        </div>
                      {{--  <div class="form-group">
                            {{Form::label('password_confirmation', 'Re-Password')}}
                            {{Form::password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Re-Password'])}}
                        </div>--}}

                        <div class="form-group">
                            {{Form::label('prf_img', 'Profile Picture')}}
                            {{Form::file('prf_img', ['class' => 'form-control'])}}
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary form-control'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('jsScript')


    <!-- jQuery 3 -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- page script -->
@endsection