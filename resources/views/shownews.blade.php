@extends('layouts.master')
@section('title')
    <title>BERITA {{ $data->judul }}</title>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="row mt-5 clearfix">

            <!-- Posts Area
        ============================================= -->
            <div class="col-lg-8">
                <div class="entry clearfix">
                    <h2 class="mb-3 fw-bold h1"> {{$data->judul}}</h2>
                    <div class="entry-meta d-flex justify-content-between mb-4">
                        <ul>
                            <li><span>Editor:</span> {{$data->editor}}</li>
                            <li><i class="icon-time"></i><a
                                    href="#">{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                            </li>
                        </ul>

                    </div>
                    {{-- <div class="row">
                        <div class="col">
                            <div class="blog-posts single-post">
                                <article class="post post-large blog-single-post border-0 m-0 p-0">
                                    <div class="post-image ms-0">
                                        <a href="blog-post.html">
                                            <img src="{{ asset('gambar_berita/' . $item->foto) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                        </a>
                                    </div>            
                                </article>
                            </div>
                        </div>
                    </div> --}}
                    <div class="post-image ms-0">
                        <a href="blog-post.html">
                            <img src="{{ asset('gambar_berita/' . $data->foto) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                        </a>
                    </div> 

                    <div class="entry-content mt-0">

                        {!! $data->isi!!}
                    </div>

                </div>

            </div>

            <!-- Top Sidebar Area
        ============================================= -->
            <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                <div class="sticky-sidebar">
                    <!-- Sidebar Widget 1
                ============================================= -->
                    <div class="widget clearfix">
                        <h3 class="font-secondary fw-medium h4">Berita Terbaru</h3>
                        <div class="row posts-md col-mb-30">
                            @foreach ($berita as $item)
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-8">
                                            {{-- <div class="entry-title title-xs"> --}}
                                                {{-- <div class="entry-categories"><a href="demo-blog-categories.html">Market</a></div>
                                                <h3><a href="{{route('berita.show', $item->slug)}}"
                                                       class="stretched-link color-underline">{{ $item->judul }}</a>
                                                </h3>
                                                </div> --}}
                                            {{-- <div class="entry-meta">
                                                <ul>
                                                    <li><a
                                                            href="#">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                            <div class="mt-4 pt-2 post-author">
                                                <h4 class="mb-3"><a href="{{route('berita.show', $item->slug)}}"
                                                    class="stretched-link color-underline">{{ $item->judul }}</a>
                                                </h4>
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                                    <a class="entry-image" href="#"><img
                                                        src="{{ asset('gambar_berita/' . $item->foto) }}"
                                                        alt="Image">
                                                    </a>
                                                    <ul>
                                                        <li><a>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- Sidebar End -->
        </div>
    </div>
@endsection
