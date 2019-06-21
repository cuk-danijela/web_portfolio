
<section id="contact">
            <div id="contact-area" style="background-image:url('images/maps.png'); background-size: cover; background-blend-mode: soft-light; background-repeat: no-repeat;">
                <div class="container">
                <h2 class="block_title works-menu wow fadeInUp text-center" data-wow-duration="0.8s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInUp;">Contact me</h2>                    
                    <!--Section: Contact v.2-->
<section class="mb-4">

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{url("/contact")}}" method="POST">
            {{csrf_field()}}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <div class="button-border">
                    <a id="submit_btn" data-scroll="" href="#contact" onclick="validateForm()" class="scrollToContent">
                        <button class="blue_button">Send message</button></a></div>
            </div>
            <div id="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p class="contact_paragraph">Belgrade, Serbia</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p class="contact_paragraph">+381 62 551 410</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p class="contact_paragraph">danijela.b.cuk@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
                </div><!-- container -->
            </div><!-- contact-area -->
            <div id="social">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="scoialinks">
                                <li class="normal-txt">Find me on</li>
                                <li class="social-icons"><a href="https://www.facebook.com/dandza18" class="hvr-pulse-shrink" target="_blank"><i style="color: white" class="fab fa-4x fa-facebook-square"></i></a></li>
                                <li class="social-icons"><a href="https://www.linkedin.com/in/danijela-cuk-1990/" class="hvr-pulse-shrink" target="_blank"><i style="color: white" class="fab fa-4x fa-linkedin"></i></a></li>
                                <li class="social-icons"><a href="https://github.com/cuk-danijela" class="hvr-pulse-shrink" target="_blank"><i style="color: white" class="fab fa-4x fa-github-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- social -->
        </section><!-- contact -->

    