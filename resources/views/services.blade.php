 @extends('partials.app')
 @section('content')
     <!-- Hero Start-->
     <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!--Hero End -->
     @include('section.services', ['bg_image' => false])
 @endsection
