
@extends('partiales.app')

@section('content')

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact </li>
                </ol>
            </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <br><br>

  <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/encore.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <form action="" method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <fieldset >
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                                    <!-- Error -->
                                    @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                                    @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Phone</label>
                                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                                    @if ($errors->has('phone'))
                                    <div class="error">
                                        {{ $errors->first('phone') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Subject</label>
                                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                        id="subject">

                                    @if ($errors->has('subject'))
                                    <div class="error">
                                        {{ $errors->first('subject') }}
                                    </div>
                                    @endif
                                </div>

                            </div>

                 <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4"></textarea>

            @if ($errors->has('message'))
            <div class="error">
                {{ $errors->first('message') }}
            </div>
            @endif
        </div>
                 <button  type="submit" name="send" value="Submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div>
             </div>
        </div>
    </section><!-- End About Section -->


  </main>

@endsection

