   <!-- Start Why Choose Area -->
   <div class="why-choose-area ptb-100" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="choose-fun-fact-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="choose-fun-fact">
                                        <h3>
                                            <span class="odometer" data-count="{{ $whychooseus[0]['box_counter_1'] }}">00</span>
                                        </h3>
                                        <p>{{ $whychooseus[0]['box_title_1_en'] }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="choose-fun-fact bg-ef720c">
                                        <h3>
                                            <span class="odometer" data-count="{ $whychooseus[0]['box_counter_2'] }}">00</span>
                                        </h3>
                                        <p>{{ $whychooseus[0]['box_title_2_en'] }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="choose-fun-fact bg-ed2f16">
                                        <h3> 
                                            <span class="odometer" data-count="{{ $whychooseus[0]['box_counter_3'] }}">00</span>
                                        </h3>
                                        <p>{{ $whychooseus[0]['box_title_3_en'] }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="choose-fun-fact bg-16ed8f">
                                        <h3>
                                            <span class="odometer" data-count="{{ $whychooseus[0]['box_counter_4'] }}">00</span>
                                        </h3>
                                        <p>{{ $whychooseus[0]['box_title_4_en'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="why-choose-content">
                            <span>{{ $whychooseus[0]['section_title_en'] }}</span>
                            <h3>{{ $whychooseus[0]['section_sub_en'] }}</h3>
                            <p>{{ $whychooseus[0]['section_desc_en'] }}</p>  
                            <div class="why-choose-btn"> {{ $whychooseus[0]['section_desc_en'] }}
                                <a href="#" class="default-btn">Contactus</a>  Or  <a  style="color:red;" href="tel:{{ $settings[0]['phone1'] }}" class="primary-btn">Call Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-choose-shape-1" data-speed="0.08" data-revert="true">
                <img src="{{ asset('assets/images/why-choose/shape-1.png') }}" alt="image">
            </div> 

            <div class="why-choose-shape-2" data-speed="0.08" data-revert="true">
                <img src="{{ asset('assets/images/why-choose/shape-2.png') }}" alt="image">
            </div>
        </div>
        <!-- End Why Choose Area -->