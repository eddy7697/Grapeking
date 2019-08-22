@extends('backend.admin')

@section('custom-js-script')
    <script src="{{ asset('js/backend/page-builder.js') }}"></script>
@endsection

@section('panel-content')
    <div class="row ch-post-form" id="page-builder">
        <div class="col-md-12">
            @if ($mode == 'edit')
                <input id="row-guid" type="hidden" name="" value="{{ $guid }}">
            @endif
            <page-builder></page-builder>
        </div>
    </div>
@endsection
