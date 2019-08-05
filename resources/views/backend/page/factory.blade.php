@extends('backend.admin')

@section('custom-js-script')
    <script src="{{ asset('js/backend/factory-manage.js') }}"></script>
@endsection

@section('panel-content')
    <div class="row ch-post-form" id="factory-manage">
        <div class="col-md-12">
            <factory-manage></factory-manage>
        </div>
    </div>
@endsection
