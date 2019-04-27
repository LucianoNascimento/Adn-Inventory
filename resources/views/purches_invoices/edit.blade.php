@extends('master.app')

@section('titleContent')
    YELLOW | Purchase Invoice Edit
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
            <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Purchases Product</li>
        </ol>
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-5">
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
                    {{--{!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}
                    <div class="box-body">

                        <div id="msg"></div>

                        {{--TODO: Start Product Purchases--}}
                        <div class="form-group">
                            {{Form::label('product_id', 'Product Name')}}
                            {{Form::select('product_id',
                             $products,
                             null,
                             ['class' => 'form-control', 'id'=>'product_id', 'placeholder' => 'Select Product'])}}
                        </div>

                        <input type="text" value="{{$result->invoice_number}}" id="invoice_number" hidden>

                        <div class="form-group">
                            {{Form::label('qty', 'Product Qty')}}
                            {{Form::text('qty', '', ['class' => 'form-control','id'=>'qty', 'onkeyup'=>'multi()', 'placeholder' => 'Quantity'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', '', ['class' => 'form-control','id'=>'price', 'onkeyup'=>'multi()', 'placeholder' => 'Price'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sales_price', 'Sales Price')}}
                            {{Form::text('sales_price', '', ['class' => 'form-control','id'=>'s_price', 'placeholder' => 'Sales Price'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('total', 'Total')}}
                            {{Form::text('total', '', ['class' => 'form-control','id'=>'total', 'readonly'=>'true', 'placeholder' => 'Total'])}}
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::button('Submit', ['class' => 'btn btn-primary form-control', 'id'=>'submit-btn', 'onclick'=>'addPurchase()'])}}
                    </div>
                    {{--{!! Form::close() !!}--}}

                    {{--TODO: End Product Purchases--}}

                    <div id="res-data"></div>
                </div>
                <!-- /.box -->
            </div>
            <div class="col-md-6 col-md-offset-1">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Purches Invoice</h3>
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
                            {{Form::text('invoice_number', $result->invoice_number, ['class' => 'form-control', 'readonly'=>'true', 'placeholder' =>'invoice number'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('total', 'Total')}}
                            {{Form::text('total', $result->total, ['class' => 'form-control', 'id'=>'totalInv', 'placeholder' => 'Total'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('discount', '% Discount')}}
                            {{Form::text('discount', $result->discount, ['class' => 'form-control', 'placeholder' => 'Discount(%)'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('discount_value', 'Discount Value')}}
                            {{Form::text('discount_value', $result->discount_value, ['class' => 'form-control', 'placeholder' => 'Discount Value'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sub_total', 'Sub Total')}}
                            {{Form::email('sub_total', $result->sub_total, ['class' => 'form-control', 'placeholder' => 'Sub Total'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('less', 'less')}}
                            {{Form::text('less', $result->less, ['class' => 'form-control', 'placeholder' => 'Less'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('grand_total', 'Grand Total')}}
                            {{Form::text('grand_total', $result->grand_total, ['class' => 'form-control', 'placeholder' => 'Grand Total'])}}
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
            var invNumber = document.getElementById('invoice_number').value;
            var s_price = document.getElementById('s_price').value;


            $("#submit-btn").addClass("disabled");


            $.ajax({
                type: "GET",
                cache: false,
                url: "{{ url('add_purchase') }}",
                data: {
                    product_id: product_id,
                    qty: qty,
                    price: price,
                    total: totalValue,
                    invNumber: invNumber,
                    s_price: s_price
                },
                success: function (data) {

                    getTotalValue(invNumber);

                    // console.log(data)
                    document.getElementById("res-data").innerHTML = data;
                    document.getElementById("msg").innerHTML = "<div class='alert alert-success'> Purchase Success! </div>";
                    $("#submit-btn").removeClass("disabled");
                },
                error: function (jqXHR, textStatus, errorThrown) {

                    document.getElementById("msg").innerHTML = "<div class='alert alert-danger'> Purchase Fail ! Try again </div>";
                }
            });

            // console.log(product_id);
        }

        function getTotalValue(invNumber) {

            $.ajax({
                type: "GET",
                cache: false,
                url: "{{ url('get_total') }}",
                data: {
                    invNumber: invNumber,
                },
                success: function (data) {

                    document.getElementById('totalInv').value = data;
                }
            });

        }

        function multi() {
            var qty = document.getElementById('qty').value;
            var price = document.getElementById('price').value;
            /* var totalInv = document.getElementById('totalInv').value;*/
            document.getElementById('total').value = qty * price;
            // document.getElementById('totalInv').value = /*parseInt(totalInv) + parseInt(qty * price)*/ qty * price;
        }
    </script>
@endsection