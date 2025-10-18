@extends('public.layout')
@section('section')
  <div class="hero-wrap" style="background-image: url({{asset('assets')}}/images/bg_3.jpg)"; data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%', opacity: 1.3 }">
          <h1 class="mb-4 text-success" style="color: white !important; text-shadow: 1px 1px green; text-shadow: 1px 1px black;" data-scrollax="properties: { translateY: '30%', opacity: 0.2 }"><b>Unity With Action for a Better Cameroon</b></h1>
          <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->
          <p data-scrollax="properties: { translateY: '30%', opacity: 0.2 }"><a href="https://www.youtube.com/watch?v=ckCoMrhghZ8" class="btn rounded bg-dark btn-outline-white px-4 py-3 popup-vimeo text-white border border-success mb-5"><span class="icon-play mr-2"></span>Watch Video</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-counter ftco-intro" id="section-counter">
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


  <section class="ftco-section" style="background-color: black;">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center text-light">
          <h2 class="mb-4">Our Causes</h2>
          <p>Empowering communities with health, hygiene, and sustainable growth for a brighter, healthier future.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="carousel-cause owl-carousel">
            @forelse ($projects as $project)
              <div class="item">
                <div class="cause-entry bg-success">
                  <a href="{{route('projects', $project->id)}}" class="img" style="background-image: url('{{$project->featured_image??''}}');"></a>
                  <div class="text p-3 p-md-4 shadow">
                    <h5 class="text-center h5 clamp-2"><a href="{{ route('projects', $project->id) }}">{{ $project->title }}</a></h5>
                    <p class="h6 text-center text-capitalize text-success clamp-1"><i>{{ $project->caption }}</i></p>
                    <div class="caption clamp-6">{{ $project->description }}</div>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
            @empty
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-2.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Black color & resistance to diseases</a></h3>
                    <p class="clamp-6">Celebrating the power of black skin and its resilience. Melanin, a natural protector, not only defines beauty but also enhances resistance to certain diseases by shielding against harmful UV rays and environmental stress. Let’s honor the science, strength, and heritage behind black skin—proof that beauty and health go hand in hand. Empower, educate, and celebrate!</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-3.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Sensitization against rheumatoid arthritis</a></h3>
                    <p class="clamp-6">Raising awareness about rheumatoid arthritis—a chronic condition that affects joints and daily life. Early diagnosis, treatment, and lifestyle adjustments can improve quality of life. Let’s educate, support, and empower communities to recognize symptoms, seek help, and manage this condition effectively. Together, we can reduce the burden of rheumatoid arthritis and promote healthier, pain-free living</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-4.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Pandemic, epidemic, endemic outbreak & preventive measures</a></h3>
                    <p class="clamp-6">Understanding pandemics, epidemics, and endemics is vital for safeguarding health. Learn the causes, symptoms, and impact of disease outbreaks, and empower yourself with preventive measures like vaccination, hygiene, and timely healthcare. Together, we can minimize risks, protect communities, and ensure resilience against future health crises. Stay informed, stay prepared, and prioritize public health for a safer tomorrow!</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-5.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Medical health service to the Cameroonian especially the interior</a></h3>
                    <p class="clamp-6">Bringing quality medical health services to all Cameroonians, especially those in remote and interior regions. Our mission is to bridge healthcare gaps, provide life-saving treatments, and ensure access to essential medical care for underserved communities. Together, we aim to promote health equity, improve lives, and create a healthier future for every citizen, no matter their location</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Medical assistant to the less privileged Cameroonian</a></h3>
                    <p class="clamp-6">Extending a helping hand to less-privileged Cameroonians through accessible medical assistance. Our initiative focuses on providing essential healthcare services, medications, and support to those in need. Together, we can bridge the healthcare gap, bring hope to underserved communities, and ensure that no one is left behind in the journey toward a healthier, brighter future.</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Improve nutrition and health outcome</a></h3>
                    <p class="clamp-6">Enhancing nutrition and health outcomes in Cameroon through sustainable interventions. Promoting food security, balanced diets, and access to quality healthcare, empowering communities to combat malnutrition and improve well-being. By integrating education, resources, and innovative solutions, we aim to create lasting impacts for healthier, thriving populations</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Agriculture towards growth and development of the economy</a></h3>
                    <p class="clamp-6">Driving economic growth and development through agriculture by fostering innovation, sustainability, and productivity. Empowers farmers with modern techniques, resources, and market access, enhancing livelihoods and boosting national economic resilience. By prioritizing agribusiness and value chains, we aim to transform agriculture into a cornerstone of prosperity and inclusive development</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Expand and build human and institutional capacity</a></h3>
                    <p class="clamp-6">Strengthening human and institutional capacity in Cameroon to drive sustainable development. Empowering individuals with skills, education, and training while enhancing institutional efficiency and resilience. By fostering leadership, innovation, and collaboration, we aim to build a robust foundation for economic growth, social progress, and long-term national success.</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Create a chain of food distribution</a></h3>
                    <p class="clamp-6">Establishing a sustainable food distribution chain to enhance access to nutritious, affordable food for all. Connect producers, processors, and consumers through efficient logistics, reducing waste and ensuring food security. By fostering collaboration and innovation, we aim to build a resilient network that supports local economies and promotes equitable food access</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Develop food production system</a></h3>
                    <p class="clamp-6">Developing a sustainable food production system to enhance food security and economic growth. Innovative farming techniques, resource efficiency, and climate resilience, ensuring reliable, high-quality food supply. By empowering farmers with the tools and knowledge to optimize production, we aim to create a self-sufficient system that supports healthy communities and drives long-term growth</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h3><a href="#">Technology adoption by small farmers</a></h3>
                    <p class="clamp-6">Promoting technology adoption among small farmers to enhance productivity and sustainability. Empowers farmers with innovative tools, digital platforms, and modern farming techniques, improving crop yields and reducing resource waste. By fostering skills development and providing access to affordable technologies, we aim to strengthen smallholder agriculture and create more resilient, profitable farming communities</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url({{asset('assets')}}/images/cause-6.jpg);"></a>
                  <div class="text p-3 p-md-4">
                    <h4><a href="#">Adapt international standard of food safety and quality</a></h4>
                    <p class="clamp-6">Adopting international standards of food safety and quality to ensure healthier, safer food for all. Enhancing food production practices, improving processing systems, and meeting global regulations. By training producers, regulators, and consumers, we aim to strengthen food safety protocols, boost consumer confidence, and promote access to high-quality food products locally and globally</p>
                    <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                  </div>
                </div>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Latest Donations</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_2.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <div class="d-flex mb-4">
              <div class="img" style="background-image: url(images/person_3.jpg);"></div>
              <div class="info ml-4">
                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                <span class="position">Donated Just now</span>
                <div class="text">
                  <p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="ftco-gallery">
    <div class="d-md-flex">
      @forelse ($images as $image)
          <a href="{{ $image->image_path }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ $image->image_path }});">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
      @empty
        <a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{asset('assets')}}/images/cause-2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{asset('assets')}}/images/cause-3.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{asset('assets')}}/images/cause-4.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{asset('assets')}}/images/cause-5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      @endforelse
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Recent Posts</h2>
          <p>Empowering Cameroon’s youth with skills in agriculture, sanitation, and medical care to foster sustainable development and improve community well-being through innovative action</p>
        </div>
      </div>
      <div class="row d-flex">
        @forelse ($posts as $post)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('blog', $post->id) }}" class="block-20" style="background-image: url({{ $post->featured_image }});">
              </a>
              <div class="text p-4 d-block shadow">
                <div class="meta mb-3">
                  <div><a href="#">{{ $post->created_at }}</a></div>
                </div>
                <h3 class="heading mt-3"><a href="{{ route('blog', $post->id) }}">{{ $post->title }}</a></h3>
                <p>{{ $post->caption }}</p>
              </div>
            </div>
          </div>
        @empty
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/image_1.jpg);">
              </a>
              <div class="text p-4 d-block shadow">
                <div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Growing a Greener Future: Sustainable Farming Techniques for Cameroon Youth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/image_2.jpg);">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">The Power of Agro-Excellence: Boosting Yields While Protecting the Environment</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/image_3.jpg);">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Agro-Innovation Spotlight: Simple Methods for Better Yields and Soil Health</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Latest Events</h2>
        </div>
      </div>
      <div class="row">
        @forelse ($events as $event)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('events', $event->id) }}" class="block-20" style="background-image: url({{ $event->featured_image }});">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="{{ route('events', $event->id) }}">{{ $event->title }}</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> {{ $event->set_time->format('d/m/Y H:i') }}</span> <span><i class="icon-map-o"></i> {{ $event->address }}</span></p>
                <p>{{ $event->caption }}</p>
                <p><a href="{{ route('events', $event->id) }}">More <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        @empty
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/event-1.jpg);">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Seeds of Change: CYIAMAEF Agro Excellence Training for Young Farmers</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/event-2.jpg);">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Health and Hygiene Expo: Promoting Wellness Through Education and Action</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('assets')}}/images/event-3.jpg);">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Volunteer Meet and Greet: Building a Stronger CYIAMAEF Community</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <section class="ftco-section-3 img" style="background-image: url({{asset('assets')}}/images/bg_3.jpg);">
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
  </section>
  
@endsection