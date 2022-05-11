@extends('admin::index')
@section('title', 'ブランド一覧')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/brands/index.css') }}">
@endsection
@section('content')
<section class="content-header">
    <h1>ブランド<small>一覧</small></h1>
    @component('admin.components.flashMessage')@endcomponent
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box grid-box">
                <div class="box-header with-border">
                    <!-- ここに 検索フォーム を実装 -->
                </div>
                <div class="box-body table-responsive no-padding">
                    <!-- ここに ブランド情報表示 を実装 -->
                </div>
                <div class="box-footer clearfix">
                    <!-- ここに ページネーション を実装 -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script type="module" src="{{ asset('admin/js/brands/index.js') }}"></script>
@endsection
