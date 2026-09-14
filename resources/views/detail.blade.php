@extends('layouts.app')

@section('title')
    {{$blog->title}}
@endsection

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-8">
        <div class="mb-3">
            <a href="{{ url('/') }}" class="btn btn-sm btn-gold-outline">
                <i class="bi bi-arrow-left me-1"></i> ย้อนกลับไปหน้าแรก
            </a>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-header">
                <h1 class="gold-gradient-text mb-0" style="font-size: 1.85rem;">{{$blog->title}}</h1>
            </div>
            <div class="luxury-card-body">
                <div style="line-height: 1.8; color: #cbd5e1; font-size: 1.05rem;">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection