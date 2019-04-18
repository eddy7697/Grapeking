@extends('main')

@section('custom-script')
@endsection

@section('custom-style')
<style>
.sub-page-banner {
    background-image: url('/img/banner.jpg');
}
</style>
@endsection

@section('content')
    <div class="sub-page-banner">
        <div class="site-thumbnail-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="site-thumbnail-container">
                            <ul class="site-thumbnail">
                                <li>首頁</li>
                                <li>關於上海葡萄王</li>
                                <li>關於我們</li>
                            </ul>
                            <h2>關於我們</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-content">
                {{-- {!!PageView::show(1)!!} --}}
            </div>
        </div>
    </div>
@endsection
