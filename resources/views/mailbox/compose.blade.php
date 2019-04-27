@extends('master.app')

@section('titleContent')
    YELLOW | Category
@endsection

@section('cssScript')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin')}}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="{{asset('admin')}}/plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="{{asset('admin')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



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
            MAIL COMPOSE
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">mailcompose</li>
        </ol>
    </section>
@endsection

@section('content')

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                                        <span class="label label-primary pull-right">12</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compose New Message</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <input class="form-control" placeholder="To:">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">

                    </textarea>
                            </div>
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment">
                                </div>
                                <p class="help-block">Max. 32MB</p>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            </div>
                            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->



@endsection

@section('jsScript')

    <!-- jQuery 3 -->
    <script src="{{asset('admin')}}/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('admin')}}/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="{{asset('admin')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('admin')}}/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin')}}/dist/js/demo.js"></script>

    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();
        });
    </script>
    <!-- Page Script -->


@endsection