 @extends('partials.app')
 @section('content')
     <!-- Hero Start-->
     <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="hero-cap text-center pt-50">
                         <h2>Contact Us</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--Hero End -->
     <!--Hero End -->
     <!-- ================ contact section start ================= -->
     <section class="contact-section">
         <div class="container">
             <div class="d-none d-sm-block mb-5 pb-4">
                 <div style="height: 480px; position: relative; overflow: hidden;">
                     <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4068.2686135511!2d73.89567177549877!3d18.546822182551914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c178e2840ced%3A0x5f0316603763bf06!2sImpetus%20Technologies%20India%20Pvt.%20Ltd.!5e1!3m2!1sen!2sin!4v1748943584300!5m2!1sen!2sin"
                         width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <h2 class="contact-title">Get in Touch</h2>
                    <h6 id="success" class="text-center text-success" style="display: none;"></h6>
                 </div>
                 <div class="col-lg-8">
                     <form class="form-contact contact_form" action="{{ route('contact.send') }}" method="POST"
                         id="contactForm" novalidate="novalidate">
                         @csrf

                         <div class="row">
                             <div class="col-12">
                                 <div class="form-group">
                                     <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <input class="form-control valid" name="name" id="name" type="text"
                                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                         placeholder="Enter your name">
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <input class="form-control valid" name="email" id="email" type="email"
                                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                         placeholder="Email">
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="form-group">
                                     <input class="form-control" name="subject" id="subject" type="text"
                                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                         placeholder="Enter Subject">
                                 </div>
                             </div>
                         </div>
                         <div class="form-group mt-3">
                             <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                         </div>
                     </form>
                 </div>
                 <div class="col-lg-3 offset-lg-1">
                     <div class="media contact-info">
                         <span class="contact-info__icon"><i class="ti-home"></i></span>
                         <div class="media-body">
                             <h3>NS IMPETUS INDIA PRIVATE LIMITED
                                 PL NO 7, S NO 206/3 UNIT
                                 NO 1/205, SECOND FLOOR,</h3>
                             <h3>VIMAN NAGAR PUNE</h3>
                             <p class="mb-0" style="line-height: 1.2;">PUNE-411014</p>
                             <p style="line-height: 1.2;">MAHARASHTRA</p>
                         </div>
                     </div>
                     <div class="media contact-info">
                         <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                         <div class="media-body">
                             <h3>+91 9770033202</h3>
                             <p>Mon to Fri 9am to 6pm</p>
                         </div>
                     </div>
                     <div class="media contact-info">
                         <span class="contact-info__icon"><i class="ti-email"></i></span>
                         <div class="media-body">
                             <h3> inquiry@nsimpetusindia.in</h3>
                             <p>Send us your query anytime!</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- ================ contact section end ================= -->
 @endsection
