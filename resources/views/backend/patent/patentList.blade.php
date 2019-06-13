@extends('backend.admin')

@section('custom-js-script')
<script src="{{ asset('js/backend/patent-list.js') }}"></script>
@endsection

@section('panel-content')
<div class="row" id="patent-list">
    <div class="col-md-12">
        <patent-list type="{{$type}}"></patent-list>
    </div>
</div>
@endsection
