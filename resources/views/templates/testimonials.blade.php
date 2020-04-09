  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
        </div>
      </div>

      @for ($i = 0; $i < count($testimonials) ; $i++)

          @if ($i  % 2)

            <div class="row">
              <div class="col-md-3">
                <div class="profile">
                  <div class="pic"><img src={{$testimonials[$i]->img}} alt=""></div>
                  <h4>{{$testimonials[$i]->name}}</h4>
                  <span>{{$testimonials[$i]->span}}</span>
                </div>
              </div>
              <div class="col-md-9">
                <div class="quote">
                  <b><img src="img/quote_sign_left.png" alt=""></b>{{$testimonials[$i]->comment}}<small><img src="img/quote_sign_right.png" alt=""></small>
                </div>
              </div>
            </div>

          @else

            <div class="row">
            <div class="col-md-9">
              <div class="quote">
                <b><img src="img/quote_sign_left.png"  alt=""></b>{{$testimonials[$i]->comment}}<small><img src="img/quote_sign_right.png" alt=""></small>
              </div>
            </div>
            <div class="col-md-3">
              <div class="profile">
                <div class="pic"><img src={{$testimonials[$i]->img}} alt=""></div>
                    <h4>{{$testimonials[$i]->name}}</h4>
                   <span>{{$testimonials[$i]->span}}</span>
                </div>  
              </div>
            </div>

          @endif

       @endfor
 
     

      {{-- <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div> --}}

    </div>
  </section>