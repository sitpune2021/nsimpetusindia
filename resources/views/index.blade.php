 @extends('partials.app')
 @section('content')
     @include('section.slider')
     @include('section.about')


     @include('section.services',  ['bg_image' => true])

     @include('section.support')



     {{-- @include('section.application') --}}

     {{-- @include('section.teams') --}}

     {{-- @include('section.testimonial') --}}

     @include('section.financialProductsAndServices')

 @endsection
