<!--
                      // @foreach($data as $data)
                        <a href="talkshow/{{$data->id}}" class="swiper-slide">
                          <div class="row talkshow-room-day-box">
                            <div class="d-flex justify-content-center">
                              <div class="talkshow-room-pic-box">
                              </div>
                            </div>
                          </div>
                          <div class="row talkshow-room-day-text-box d-flex justify-content-start">
                            <div class="talkshow-room-day-which-box">
                              <h3 class="text-start yellow-strong">{{ $data->title }}</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center my-2">
                              <p class="text-center blue-strong">{{ $data->theme }}</p>
                            </div>
                          </div>
                        </a><!-- End Talkshow item
                      // @endforeach
                      -->