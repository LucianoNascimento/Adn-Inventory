@extends('master.app')

@section('titleContent')
    YELLOW | Category
@endsection

@section('cssScript')

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
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

    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            CATEGORY LIST
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Category List</li>
        </ol>
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header bg-blue-gradient">
                        <h3 class="box-title"><b>Category List</b></h3>
                    </div>

                {{ Session::get('message')}}

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="text-center table-hover table bg-danger table-bordered table-striped  ">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Label</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i=1;?>

                            @foreach($results as $result)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$result->name}}</td>
                                    <td>{{$result->label}}</td>
                                    <td>{{$result->status}}</td>
                                    <td>
                                        <a href="/category/{{$result->id}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a {{--href="/category/{{$result->id}}/edit"--}} class="btn btn-success btn-sm" data-toggle= 'modal', data-target = '#modal-info'><i class="fa fa-edit"></i></a>

                                        {!!Form::open(['action' => ['CategoryCtrl@destroy', $result->id], 'method' => 'POST','class' => 'pull-right','class' => 'fa fa-ey'])!!}
                                        {{Form::hidden('_method', 'delete')}}
                                        {!! Form::button('<i class="fa fa-trash"></i>',array('class'=>'btn btn-danger btn-sm text-white', 'type'=>'submit')) !!}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Label</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

<div class="modal modal-info fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Category Update</h4>
            </div>
            <div class="modal-body">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div>

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
                                {!! Form::open(['action' => ['CategoryCtrl@update', $result->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                <div class="box-body">
                                    <div class="form-group">
                                        {{Form::label('name', 'Category Name')}}
                                        {{Form::text('name', $result->name, ['class' => 'form-control', 'placeholder' => 'Category name'])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('label', 'Category Label')}}
                                        {{Form::text('label', $result->label, ['class' => 'form-control', 'placeholder' => 'Category Label'])}}
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

                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline"> Save update</button>

                {{Form::hidden('_method', 'PUT')}}
                {!! Form::close() !!}

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@section('jsScript')


    <!-- jQuery 3 -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection