@extends('main')

@section('custom-script')
<script src="/js/paper-list.js"></script>
<script src="/js/patent-list.js"></script>
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/research/banner-3.jpg');
}
</style>
@endsection

@section('content')
<div class="sub-page-banner">
    <div class="site-thumbnail-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="site-thumbnail-container">
                        <ul class="site-thumbnail">
                            <li>{{ trans('string.home') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('string.research') }}</li>
                            <li>&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;</li>
                            <li>{{ trans('text.patent_and_literature') }}</li>
                        </ul>
                        <h2>{{ trans('text.patent_and_literature') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="nav nav-tabs about-tab" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="patent-list-tab" data-toggle="tab" href="#patent-list" role="tab" aria-controls="patent-list" aria-selected="true">
                        {{ trans('text.patent') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="paper-list-tab" data-toggle="tab" href="#paper-list" role="tab" aria-controls="paper-list" aria-selected="false">
                        {{ trans('text.literature_publication') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 about-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="patent-list" role="tabpanel" aria-labelledby="patent-list-tab">
                    <h3 class="about-section-title">{{ trans('text.patent') }}</h3>
                    <document-list type="patent"></document-list>
                </div>
                <div class="tab-pane fade" id="paper-list" role="tabpanel" aria-labelledby="paper-list-tab">
                    <h3 class="about-section-title">{{ trans('text.literature_publication') }}</h3>
                    <document-list type="paper"></document-list>
                </div>
            </div>
        </div>
        <div class="col-md-3 about-thumbnail">
            @include('components.researchThumbnail')
        </div>
    </div>
</div>
@endsection
