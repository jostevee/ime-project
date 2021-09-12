@if ($data->count() == 0)
                  <h1 style="margin-top: 250px;">Ups... there are no data available</h1>
                  <h2>Please try again :)</h2>
                @else
<!--
                        //@foreach($data as $data)
                        <div class="swiper-slide">
                          <div class="col-6 row d-flex justify-content-center align-items-center mt-4">
                            <div class="col-12 blue-background-box d-flex justify-content-center align-items-center">
                              <div class="yellow-background-box d-flex justify-content-center align-items-center">
                                <img src="assets/img/merchandise/{{$data->image}}find_the_fish.jpeg') }}" class="merch-box"/>
                              </div>
                            </div>
                            <div class="col-8 d-flex justify-content-center mt-4">
                              <div class="name-box">
                                <p class="text-center yellow-strong">
                                  {{$data->name}}
                                </p>
                                <p class="text-center yellow-regular" style="font-size: 13px;">
                                  {{$data->description}}
                                  Rp80.000,00 (Lengan Pendek)<br>
                                  Rp85.000,00 (Lengan Panjang)
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="row merchandise-room-day-box">
                            <div class="d-flex justify-content-center">
                              <div class="merchandise-room-pic-box">
                              </div>
                            </div>
                          </div>
                          <div class="row merchandise-room-day-text-box d-flex justify-content-start">
                            <div class="merchandise-room-day-which-box">
                              <h3 class="text-start yellow-strong">{{ $data->name }}</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-2">
                              <h5 class="text-center blue-strong">{{ $data->description }}</h5>
                            </div>
                          </div>

                        </div> End Merchandise item 
                        //@endforeach
                      -->
                      @endif