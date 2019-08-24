@extends('backend.admin')

@section('custom-js-script')
    {{-- <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/> --}}
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="/js/plugins/grapesjs-blocks-bootstrap4.min.js"></script>
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
