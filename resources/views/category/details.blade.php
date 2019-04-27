@extends('master.app')

@section('titleContent')
    YELLOW | Category Details
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
@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            CATEGORY DETAILS
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/category"><i class="fa fa-dashboard"></i> Category list</a></li>
            <li class="active">Category details</li>
        </ol>
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row panel panel-primary" style="margin-top:4%;">
          <div class="panel-heading lead">
            <div class="row">
                <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> View Category Details</div>
                <div class="col-lg-4 col-md-4 text-right">
                    <div class="btn-group text-center">
                        <a href="/category" class="btn btn-light btn-default"><i class="fa fa-eye"></i></a>
                        <a href="/category/{{$result->id}}/edit" class="btn btn-light btn-default"><i class="fa fa-edit"></i></a>
                        {!!Form::open(['action' => ['CategoryCtrl@destroy', $result->id], 'method' => 'POST','class' => 'pull-right','class' => 'fa fa-ey'])!!}
                        {{Form::hidden('_method', 'delete')}}
                        {!! Form::button('<i class="fa fa-trash"></i>',array('class'=>'btn btn-light btn-default', 'type'=>'submit')) !!}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">



            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Summery" class="text-primary"><i class="fa fa-indent"></i> <b>Summary</b></a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="Summery" class="tab-pane fade in active">

                                    <div class="table-responsive panel">
                                        <table class="table">
                                            <tbody>

                                            <tr>
                                                <td class="text-primary"><i class="fa fa-user"></i> Category Name</td>
                                                <td>{{ $result->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary"><i class="fa fa-list-ol"></i> Category Label</td>
                                                <td>{{ $result->label }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary"><i class="fa fa-book"></i> Status</td>
                                                <td>{{ $result->status }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary"><i class="fa fa-group"></i> user</td>
                                                <td>{{ $result->user_id }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary"><i class="fa fa-calendar"></i> Create Date</td>
                                                <td>{{ $result->created_at }}</td>
                                            </tr>

                                            <tr>
                                                <td class="text-primary"><i class="fa fa-university"></i> Update Date</td>
                                                <td>{{ $result->updated_at }}  </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- /.table-responsive -->

        </div>


    </section>
    <!-- /.content -->
@endsection

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

@endsection