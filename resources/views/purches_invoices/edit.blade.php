@extends('master.app')

@section('titleContent')
    YELLOW | Customers Edit
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
            Purchases
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/customer"><i class="fa fa-dashboard"></i> Customer list</a></li>
            <li class="active">Purchases Product</li>
        </ol>
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Product</h3>
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
                    {!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="box-body">

                        <div class="form-group">
                            {{Form::label('product_id', 'Product Name')}}
                            {{Form::select('product_id',
                             $products,
                             null,
                             ['class' => 'form-control', 'id'=>'product_id', 'placeholder' => 'Select Product'])}}
                        </div>


                        <div class="form-group">
                            {{Form::label('qty', 'Product Qty')}}
                            {{Form::text('qty', '', ['class' => 'form-control','id'=>'qty', 'onkeyup'=>'multi()', 'placeholder' => 'Customer name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', '', ['class' => 'form-control','id'=>'price', 'onkeyup'=>'multi()', 'placeholder' => 'Phone'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('total', 'Total')}}
                            {{Form::text('total', '', ['class' => 'form-control','id'=>'total', 'readonly'=>'true', 'placeholder' => 'Phone'])}}
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::button('Submit', ['class' => 'btn btn-primary form-control', 'onclick'=>'addPurchase()'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Customer</h3>
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
                    {!! Form::open(['action' => ['PurchasesInvoiceCtrl@update',$result->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('invoice_number', 'Invoice Number')}}
                            {{Form::text('invoice_number', $result->invoice_number, ['class' => 'form-control', 'readonly'=>'true', 'placeholder' => 'Customer name'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('total', 'Total')}}
                            {{Form::text('total', $result->total, ['class' => 'form-control', 'id'=>'totalInv', 'placeholder' => 'Phone'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('discount', '% Discount')}}
                            {{Form::text('discount', $result->discount, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('discount_value', 'Discount Value')}}
                            {{Form::text('discount_value', $result->discount_value, ['class' => 'form-control', 'placeholder' => 'Phone'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sub_total', 'Sub Total')}}
                            {{Form::email('sub_total', $result->sub_total, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('less', 'less')}}
                            {{Form::text('less', $result->less, ['class' => 'form-control', 'placeholder' => 'Address'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('grand_total', 'Grand Total')}}
                            {{Form::text('grand_total', $result->grand_total, ['class' => 'form-control', 'placeholder' => 'Address'])}}
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
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::hidden('_method', 'PUT')}}
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

    <script>
        function addPurchase() {

            var product_id = document.getElementById('product_id').value;
            var qty = document.getElementById('qty').value;
            var price = document.getElementById('price').value;
            var totalValue = document.getElementById('total').value;


            $.ajax({
                type: "GET",
                cache: false,
                url: "{{ url('add_purchase') }}",
                data: {
                    product_id: product_id,
                    qty: qty,
                    price: price,
                    total: totalValue,
                },
                success: function (data) {
                    console.log("qt --- >" + data);
                    // $("#msg").removeClass("disabled");
                    // document.getElementById("msg").innerHTML = "Purchases Add";
                    // document.getElementById("alertMsg").innerHTML = alertMsg;
                    // CreateTableFromJSON(data)
                }
            });

            // console.log(product_id);
        }

        function multi() {
            var qty = document.getElementById('qty').value;
            var price = document.getElementById('price').value;
            var totalInv = document.getElementById('totalInv').value;
            document.getElementById('total').value = qty * price;
            // document.getElementById('totalInv').value = parseInt(totalInv) + parseInt(qty * price);
        }
    </script>
@endsection