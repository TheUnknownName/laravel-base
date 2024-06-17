@extends('layout.app')

@section('head')
    <!-- Custom CSS -->
    <link href="{{asset('assets/dist-EA-modern/css/style.min.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{asset('assets/dist-EA-modern/css/pages/error-pages.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">Page Not Found !</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="{{route('landing-page-home')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40 text-white">Back to home</a> </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/EA/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/EA/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/dist-EA-modern/js/waves.js')}}"></script>
@endsection
