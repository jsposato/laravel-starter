@section('footer')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-offset-1">
                    <p>Template Left Footer</p>
                </div>
                <div class="col-md-3 col-offset-1">
                    <p>Version: {!! Config::get('version.app_version') !!}</p>
                </div>
                <div class="col-md-3 col-offset-1">
                    <p>Template Right Footer</p>
                </div>
            </div>
        </div>
    </footer>
@stop
