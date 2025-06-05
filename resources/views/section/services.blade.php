     
     
     <!-- Services Area Start -->
     <div class="services-area {{ $bg_image ? 'pt-100 pb-100' : 'section-padding30' }}"
         @if ($bg_image) data-background="assets/img/gallery/section_bg02.jpg" @endif>
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6 col-md-10">
                     <!-- Section Tittle -->
                     <div class="section-tittle text-center mb-80">
                         <span>Services that we are providing</span>
                         <h2>High Performance Services For All Industries.</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-sm-12">
                     <ul class="nav nav-pills custom-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                         style="position: relative; padding-bottom: 25px;">
                         <li class="nav-item mr-2" role="presentation">
                             <button class="nav-link active" id="pills-personal-tab" data-toggle="pill"
                                 data-target="#pills-personal" type="button" role="tab"
                                 aria-controls="pills-personal" aria-selected="true">Unsecured Loans</button>
                         </li>
                         <li class="nav-item" role="presentation">
                             <button class="nav-link" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                                 type="button" role="tab" aria-controls="pills-home"
                                 aria-selected="false">Secured Loans
                             </button>
                         </li>
                     </ul>

                     <div class="tab-content" id="pills-tabContent">

                         {{-- Personal Loan --}}
                         <div class="tab-pane fade show active" id="pills-personal" role="tabpanel"
                             aria-labelledby="pills-personal-tab">
                             <div class="row">
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-work"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Personal Loan</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-loan"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">MSME Business Loans</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-loan-1"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Micro Business Loans</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-like"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Working Capital (Overdraft/Case
                                                     credit)</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-loan"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Home Loan Interest Rate</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-work"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Personal Loan Interest Rate</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                   <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-loan-1"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Loan Against Property</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>


                             </div>
                         </div>

                         {{-- Home Loan --}}
                         <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                             <div class="row">

                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-loan"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Mortgage Loan</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-like"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Car Loan</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                                  <div class="col-lg-3 col-md-6 col-sm-6">
                                     <div class="single-cat text-center mb-50">
                                         <div class="cat-icon">
                                             <span class="flaticon-work"></span>
                                         </div>
                                         <div class="cat-cap">
                                             <h5><a href="{{ url('services') }}">Home Loan</a></h5>
                                             <p>Consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore
                                                 et dolore</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </div>
     <!-- Services Area End -->
