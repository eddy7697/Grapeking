@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/add-download.js') }}"></script>
@endsection

@section('panel-content')
<div class="row" id="add-download">
    <div class="col-md-12">
        @if ($mode == 'edit')
            <add-download type="{{$type}}" mode="{{$mode}}" id="{{$id}}"></add-download>
        @else
            <add-download type="{{$type}}" mode="{{$mode}}"></add-download>
        @endif
    </div>
</div>
@endsection
