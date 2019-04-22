@extends('master.app')

@section('titleContent')
    YELLOW | Purches Create
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

    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <link rel="stylesheet"
          href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">


    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

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

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Purches</h3>
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
                    {!! Form::open(['action' => 'PurchasesInvoiceCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">

                        <div class="form-group">
                            {{Form::label('invoice_number', 'Invoice Number')}}
                            {{Form::text('invoice_number', '', ['class' => 'form-control', 'placeholder' => 'Invoice Number'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('do_no', 'Due No')}}
                            {{Form::text('do_no', '', ['class' => 'form-control', 'placeholder' => 'Due Number'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('supplier_id', 'Supplier')}}
                            {{Form::select('supplier_id',
                            $suppliers,
                            null,
                             ['class' => 'form-control select2',
                            'placeholder' => 'Select Supplier'])}}
                        </div>


                        <div class="form-group">
                            {{Form::label('date', 'Date')}}
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('date', '', ['class' => 'form-control pull-right', 'placeholder' => 'Date','id'=>'datepicker'])}}
                            </div>
                            <!-- /.input group -->
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
    <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script>
        $(function () {

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })


        })
    </script>
@endsection