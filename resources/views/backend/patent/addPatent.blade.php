@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/add-patent.js') }}"></script>
@endsection

@section('panel-content')
<div class="row" id="add-patent">
    <div class="col-md-12">
        @if ($mode == 'edit')
            <add-patent type="{{$type}}" mode="{{$mode}}" id="{{$id}}"></add-patent>
        @else
            <add-patent type="{{$type}}" mode="{{$mode}}"></add-patent>
        @endif
    </div>
</div>
@endsection
