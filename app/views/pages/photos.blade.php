@extends('layouts.website')

@section('content')
<div class="container" style="min-height: 600px;">

    <div class="col-sm-3" style="padding-left: 0;">
        <div class="list-group">
            <a href="/media" class="list-group-item">Media</a>
            <a href="#" class="list-group-item">Press Release</a>
            <a href="/photos" class="list-group-item">Photos & Gallery</a>
        </div>
    </div>

    <div class="col-sm-9">

        <div class="col-sm-4">
            <a href="{{ asset('assets/img/SuperGeeks-fix-install-service.jpg') }}" data-lightbox="roadtrip">
                <img src="{{ asset('assets/img/SuperGeeks-fix-install-service.jpg') }}"
                     class="img-responsive img-thumbnail"/>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="{{ asset('img/gadget_swap.png') }}" data-lightbox="roadtrip">
                <img src="{{ asset('img/gadget_swap.png') }}" class="img-responsive img-thumbnail"/>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="{{ asset('img/slider-3.png') }}" data-lightbox="roadtrip">
                <img src="{{ asset('img/slider-3.png') }}" class="img-responsive img-thumbnail"/>
            </a>
        </div>

    </div>
</div>
@stop