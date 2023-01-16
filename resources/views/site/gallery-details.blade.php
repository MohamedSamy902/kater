@extends('site.layout.master')

@section('content')
    <!--Gallery Page Start-->
    <section class="gallery-page">
        <h1 class="text-center pb-5">{{ $gall->title }}</h1>

        <div class="container">

            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="{{ $gallery->getFirstMediaUrl('galleryDetails') }}" alt="" style="height: 55vh">
                                {{-- <a href="assets/images/gallery/gallery-page-1-1.jpg" class="img-popup"></a> --}}
                                <!-- /.img-popup -->
                                {{-- <div class="gallery-page__content">
                                    <p class="gallery-page__sub-title">{{ Charity }}</p>
                                    <h5 class="gallery-page__title"><a href="gallery.html">Education</a></h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--Gallery Page End-->
@endsection
