<section class="space-pb">
    <div class="container">
        <div class="row">
          <div  class="col-md-12">
            <div class="form-dark contact-form">
                 @if (session('message'))
                  <div class="text text-success"> 
                      {{session('message')}}
                  </div>
                @endif
               <form class="form mt-4" action="{{ route('contact-us') }}" method="POST">
                  @csrf
                  @method('POST')

                <div class="form-row">
                  <div class="form-group col-6">
                    <input type="text" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" name="first_name" placeholder="First Name">
                    @if($errors->has('first_name'))
                          <div class="invalid-feedback">
                              {{ $errors->first('first_name') }}
                          </div>
                      @endif
                  </div>
                  <div class="form-group col-6">
                    <input type="text" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" placeholder="Last Name">
                    @if($errors->has('last_name'))
                          <div class="invalid-feedback">
                              {{ $errors->first('last_name') }}
                          </div>
                      @endif
                  </div>
                  <div class="form-group col-12">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email">
                    @if($errors->has('email'))
                          <div class="invalid-feedback">
                              {{ $errors->first('email') }}
                          </div>
                      @endif
                  </div>
                  <div class="form-group col-12">
                    <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="phone" placeholder="Website">
                    @if($errors->has('phone'))
                          <div class="invalid-feedback">
                              {{ $errors->first('phone') }}
                          </div>
                      @endif
                  </div>
                  <div class="form-group col-12">
                    <input type="text" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" id="subject" placeholder="Subject">
                    @if($errors->has('subject'))
                          <div class="invalid-feedback">
                              {{ $errors->first('subject') }}
                          </div>
                      @endif
                  </div>
                  <div class="form-group col-12 mb-0">
                    <textarea rows="4" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="message" placeholder="Message"></textarea>
                    @if($errors->has('message'))
                          <div class="invalid-feedback">
                              {{ $errors->first('message') }}
                          </div>
                      @endif
                  </div>
                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </div>
                </div>
              </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>