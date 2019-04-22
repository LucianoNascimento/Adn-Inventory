@extends('master.app')

@section('titleContent')
    YELLOW | SalesInvoice Create
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
            SALES INVOICE CREATE
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/sales_invoices"><i class="fa fa-dashboard"></i>Salesinvoice list</a></li>
            <li class="active">Sales Invoice Create</li>
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
                        <h3 class="box-title">Add Sales-invoice</h3>
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
                    {!! Form::open(['action' => 'CustomerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">

                        <div class="form-group">
                            {{Form::label('invoice_number', 'Invoice Number')}}
                            {{Form::text('invoice_number', '', ['class' => 'form-control', 'placeholder' => 'Invoice number'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('customer_id', 'Customer ID')}}
                            {{Form::select('customer_id',
                                                       $customerlist,
                                                        null,
                                                        ['class' => 'form-control'])}}
                        </div>


                        <div class="form-group">
                            {{Form::label('do_no', 'Do No')}}
                            {{Form::text('do_no', '', ['class' => 'form-control', 'placeholder' => 'Customer ID'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('date', 'Date')}}
                            {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'Date'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('discount', 'Discount')}}
                            {{Form::text('discount', '', ['class' => 'form-control', 'placeholder' => 'Discount'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('discount_value', 'Discount Value')}}
                            {{Form::text('discount_value', '', ['class' => 'form-control', 'placeholder' => 'Discount Value'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('total', 'Total')}}
                            {{Form::text('total', '', ['class' => 'form-control', 'placeholder' => 'Total'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sub_total', 'Sub Total')}}
                            {{Form::text('sub_total', '', ['class' => 'form-control', 'placeholder' => 'Sub Total'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('grand_total', 'Grand Total')}}
                            {{Form::text('grand_total', '', ['class' => 'form-control', 'placeholder' => 'Grand Total'])}}
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