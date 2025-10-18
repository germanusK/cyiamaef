@extends('public.layout')
@section('section')

  <div class="hero-wrap" style="background-image: url({{asset('assets/images/dld/about-21.Jpg')}}); background-color: #5f5f5f; background-blend-mode: multiply" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-about align-self-stretch" style="background-image: url({{asset('assets')}}/images/bg_3.jpg); width: 100%;"></div>
        </div>
        <div class="col-md-6 pl-md-5 ftco-animate">
          <h2 class="mb-4">Welcome to CYIAMAEF</h2>
          <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
              <strong>Empowering The Youth</strong>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
              <h3 class="mb-4">Make a Donation</h3>
              <p>Your support fuels change. Be the hero they need</p>
              <p><a href="{{route('donate')}}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
              <h3 class="mb-4">Be a Volunteer</h3>
              <p>Join hands to create change. Become a volunteer and inspire hope in every step</p>
              <p><a href="{{route('contact')}}" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Agriculture</h3>
              <p>Sowing the seeds of progress. Empowering farmers, nurturing growth, and harvesting a sustainable future.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Sanitation</h3>
              <p>Dignity through hygiene. Building healthier communities for tomorrow.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 d-flex services p-3 py-4 d-block">
            <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
            <div class="media-body pl-4">
              <h3 class="heading">Medical Assistance</h3>
              <p>Trusted care, brighter futures. Because you deserve the best.</p>
            </div>
          </div>    
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Causes</h2>
          <p>Empowering communities with health, hygiene, and sustainable growth for a brighter, healthier future.</p>
        </div>
      </div>
      <div class="row">
        
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-1.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Sanitation for all especiallys children</a></h3>
              <p>Promoting clean and safe sanitation for all, with a special focus on children. Ensure access to hygienic facilities, fostering health, dignity, and brighter futures. By prioritizing sanitation, we protect children from diseases, improve school attendance, and empower communities for lasting change. Together, we can build healthier lives—one clean toilet at a time</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-2.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Black color & resistance to diseases</a></h3>
              <p>Celebrating the power of black skin and its resilience. Melanin, a natural protector, not only defines beauty but also enhances resistance to certain diseases by shielding against harmful UV rays and environmental stress. Let’s honor the science, strength, and heritage behind black skin—proof that beauty and health go hand in hand. Empower, educate, and celebrate!</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-3.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Sensitization against rheumatoid arthritis</a></h3>
              <p>Raising awareness about rheumatoid arthritis—a chronic condition that affects joints and daily life. Early diagnosis, treatment, and lifestyle adjustments can improve quality of life. Let’s educate, support, and empower communities to recognize symptoms, seek help, and manage this condition effectively. Together, we can reduce the burden of rheumatoid arthritis and promote healthier, pain-free living</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-4.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Pandemic, epidemic, endemic outbreak & preventive measures</a></h3>
              <p>Understanding pandemics, epidemics, and endemics is vital for safeguarding health. Learn the causes, symptoms, and impact of disease outbreaks, and empower yourself with preventive measures like vaccination, hygiene, and timely healthcare. Together, we can minimize risks, protect communities, and ensure resilience against future health crises. Stay informed, stay prepared, and prioritize public health for a safer tomorrow!</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-5.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Medical health service to the Cameroonian especially the interior</a></h3>
              <p>Bringing quality medical health services to all Cameroonians, especially those in remote and interior regions. Our mission is to bridge healthcare gaps, provide life-saving treatments, and ensure access to essential medical care for underserved communities. Together, we aim to promote health equity, improve lives, and create a healthier future for every citizen, no matter their location</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Medical assistant to the less privileged Cameroonian</a></h3>
              <p>Extending a helping hand to less-privileged Cameroonians through accessible medical assistance. Our initiative focuses on providing essential healthcare services, medications, and support to those in need. Together, we can bridge the healthcare gap, bring hope to underserved communities, and ensure that no one is left behind in the journey toward a healthier, brighter future.</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Improve nutrition and health outcome</a></h3>
              <p>Enhancing nutrition and health outcomes in Cameroon through sustainable interventions. Promoting food security, balanced diets, and access to quality healthcare, empowering communities to combat malnutrition and improve well-being. By integrating education, resources, and innovative solutions, we aim to create lasting impacts for healthier, thriving populations</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Agriculture towards growth and development of the economy</a></h3>
              <p>Driving economic growth and development through agriculture by fostering innovation, sustainability, and productivity. Empowers farmers with modern techniques, resources, and market access, enhancing livelihoods and boosting national economic resilience. By prioritizing agribusiness and value chains, we aim to transform agriculture into a cornerstone of prosperity and inclusive development</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Expand and build human and institutional capacity</a></h3>
              <p>Strengthening human and institutional capacity in Cameroon to drive sustainable development. Empowering individuals with skills, education, and training while enhancing institutional efficiency and resilience. By fostering leadership, innovation, and collaboration, we aim to build a robust foundation for economic growth, social progress, and long-term national success.</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Create a chain of food distribution</a></h3>
              <p>Establishing a sustainable food distribution chain to enhance access to nutritious, affordable food for all. Connect producers, processors, and consumers through efficient logistics, reducing waste and ensuring food security. By fostering collaboration and innovation, we aim to build a resilient network that supports local economies and promotes equitable food access</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Develop food production system</a></h3>
              <p>Developing a sustainable food production system to enhance food security and economic growth. Innovative farming techniques, resource efficiency, and climate resilience, ensuring reliable, high-quality food supply. By empowering farmers with the tools and knowledge to optimize production, we aim to create a self-sufficient system that supports healthy communities and drives long-term growth</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Technology adoption by small farmers</a></h3>
              <p>Promoting technology adoption among small farmers to enhance productivity and sustainability. Empowers farmers with innovative tools, digital platforms, and modern farming techniques, improving crop yields and reducing resource waste. By fostering skills development and providing access to affordable technologies, we aim to strengthen smallholder agriculture and create more resilient, profitable farming communities</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
        <div class="item col-sm-6 col-lg-4 ftco-animate mb-5">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h4><a href="#">Adapt international standard of food safety and quality</a></h4>
              <p>Adopting international standards of food safety and quality to ensure healthier, safer food for all. Enhancing food production practices, improving processing systems, and meeting global regulations. By training producers, regulators, and consumers, we aim to strengthen food safety protocols, boost consumer confidence, and promote access to high-quality food products locally and globally</p>
              <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
