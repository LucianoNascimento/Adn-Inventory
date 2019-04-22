@extends('master.app')

@section('titleContent')
    YELLOW | Suppliers Edit
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
            SUPPLIER EDIT
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/suppliers"><i class="fa fa-dashboard"></i> Suppliers list</a></li>
            <li class="active">Suppliers edit</li>
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
                        <h3 class="box-title">Update Supplier</h3>
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
                    {!! Form::open(['action' => ['SupplierController@update',$result->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('supplier_name', 'Supplier Name')}}
                            {{Form::text('supplier_name', $result->supplier_name, ['class' => 'form-control', 'placeholder' => 'Supplier name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('mobile', 'Mobile')}}
                            {{Form::number('mobile', $result->mobile, ['class' => 'form-control', 'placeholder' => 'Mobile'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('address', 'Address')}}
                            {{Form::text('address', $result->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('payment', 'Payment')}}
                            {{Form::text('payment', $result->payment, ['class' => 'form-control', 'placeholder' => 'Payment'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('status', 'Status')}}
                            {{Form::select('status',
                            [
                            'active'=>'Active',
                            'deactive'=>'De-Active',
                           ],
                             $result->status,
                             ['class' => 'form-control', 'placeholder' => 'Select Status'])}}
                        </div>
                       {{-- <div class="form-group">
                            {{Form::label('user_id', 'User ID')}}
                            {{Form::number('user_id', $result->user_id, ['class' => 'form-control', 'placeholder' => 'User ID'])}}
                        </div>--}}
                        <div class="form-group">
                            {{Form::label('contact_person', 'Contact Person')}}
                            {{Form::text('contact_person', $result->contact_person, ['class' => 'form-control', 'placeholder' => 'Contact Person'])}}
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary form-group'])}}
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