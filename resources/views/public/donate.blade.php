@extends('public.layout')
@section('section')



  <section class="ftco-section">
    <div class="container">
      <div class="container-fluid">
          <div class="col-md-7 ftco-animate text-center mx-auto">
            <h1 class="mb-3 bread text-dark"><i><b>Donate</b></i></h1>
            <div class="col-sm-10 col-lg-9 py-5 my-5 border border-white rounded bg-light shadow px-3 mx-auto d-flex justify-content-center align-items-center">
              <form method="post">
                @csrf
                <div class="row text-left">
                  <div class="col-md-7 pb-3 pt-2 border-bottom border-white">
                    <input type="text" name="name" required class="form-control rounded">
                    <small class="text-info"><i class="fa fa-info text-info"></i> Your name <span class="text-danger">*</span> </small>
                  </div>
                  <div class="col-md-5 pb-3 pt-2 border-bottom border-white">
                    <input type="email" name="email" required class="form-control rounded">
                    <small class="text-info"><i class="fa fa-info text-info"></i> email <span class="text-danger">*</span> </small>
                  </div>
                  <div class="col-md-6 pb-3 pt-2 border-bottom border-white">
                    <input type="number" min="1" name="amount" required class="form-control rounded">
                    <small class="text-info"><i class="fa fa-info text-info"></i> amount <span class="text-danger">*</span> </small>
                  </div>
                  <div class="col-md-6 pb-3 pt-2 border-bottom border-white">
                    <select name="currency" required class="filter-select form-control rounded">
                      <option value="">chose currency</option>
                      @foreach (config('currencies') as $currency)
                        <option value="{{ $currency['Code'] }}" {{ $currency['Code'] == 'XAF' ? 'selected' : '' }}> [{{ $currency['Symbol'] }}]   {{ $currency['Code'] }} - {{ $currency['Name'] }}</option>
                      @endforeach
                    </select>
                    <small class="text-info"><i class="fa fa-info text-info"></i> currency <span class="text-danger">*</span> </small>
                  </div>
                  <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-sm btn-primary py-2 rounded form-control text-capitalize">donate</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
      
    </div>
  </section>

  {{-- <section class="ftco-section-3 img" style="background-image: url({{asset('assets')}}/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row d-md-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-2 align-self-stretch" style="background-image: url({{asset('assets')}}/images/bg_4.jpg);"></div>
      </div>
      <div class="col-md-6 volunteer pl-md-5 ftco-animate">
        <h3 class="mb-3">Be a volunteer</h3>
        <form action="#" class="volunter-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
          </div>
        </form>
      </div>    			
      </div>
    </div>
  </section> --}}
@endsection
