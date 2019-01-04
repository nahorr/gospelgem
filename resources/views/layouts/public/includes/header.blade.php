   
      <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="background-color: #fff; padding: 0; margin: 0 auto;"
           data-alias="news-gallery36"
           data-source="gallery">
        <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display: none;"
             data-version="5.4.1">
          <ul>
            @foreach($site_pictures as $picture)
              @if($picture->picture_category->pic_category_name == 'Slider')
              <li data-index="rs-{{$number_init++}}"
                  data-transition="parallaxvertical"
                  data-slotamount="default"
                  data-hideafterloop="0"
                  data-hideslideonmobile="off"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="default"
                  data-thumb="{{asset('unify/assets/img/pictures/'.$picture->picture)}}"
                  data-rotate="0"
                  data-fstransition="fade"
                  data-fsmasterspeed="1500"
                  data-fsslotamount="7"
                  data-saveperformance="off"
                  data-title="{{$picture->picture_title_right}}"
                  data-description="{{$picture->picture_description_right}}">
                
                <img class="rev-slidebg" src="{{asset('unify/assets/img/pictures/'.$picture->picture)}}" alt="gosgem slider"
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     data-bgparallax="10">
            
                <!-- LAYER NR. 1 -->
                <div id="slide-{{$number_init++}}-layer-3" class="tp-caption tp-shape tp-shapewrapper tp-resizeme" style="z-index: 5; background-color: rgba(0, 0, 0, .35);"
                     data-x="['center','center','center','center']"
                     data-y="['middle','middle','middle','middle']"
                     data-hoffset="['0','0','0','0']"
                     data-voffset="['0','0','0','0']"
                     data-width="full"
                     data-height="full"
                     data-whitespace="normal"
                     data-type="shape"
                     data-basealign="slide"
                     data-responsive_offset="on"
                     data-frames='[
                       {"from":"opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                       {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power3.easeInOut"}
                     ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"></div>

                <!-- LAYER NR. 2 -->
                <div id="slide-{{$number_init++}}-layer-1" class="tp-caption Newspaper-Title tp-resizeme" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"
                     data-x="['left','left','left','left']"
                     data-y="['top','top','top','top']"
                     data-hoffset="['50','50','50','30']"
                     data-voffset="['165','135','105','130']"
                     data-fontsize="['50','50','50','30']"
                     data-lineheight="['55','55','55','35']"
                     data-width="['600','600','600','420']"
                     data-height="none"
                     data-whitespace="normal"
                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[
                       {"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                       {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}
                     ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[10,10,10,10]"
                     data-paddingleft="[0,0,0,0]">{{ $picture->picture_description_left }}
                </div>

                <!-- LAYER NR. 3 -->
                <div id="slide-{{$number_init++}}-layer-2" class="tp-caption Newspaper-Subtitle tp-resizeme" style="z-index: 7; white-space: nowrap; text-transform: uppercase;"
                     data-x="['left','left','left','left']"
                     data-y="['top','top','top','top']"
                     data-hoffset="['50','50','50','30']"
                     data-voffset="['140','110','80','100']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-type="text"
                     data-responsive_offset="on"
                     data-frames='[
                       {"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                       {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}
                     ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]">{{ $picture->picture_title_left }}
                </div>

                <!-- LAYER NR. 4 -->
                <div id="slide-{{$number_init++}}-layer-5" class="tp-caption Newspaper-Button rev-btn" style="z-index: 8; white-space: nowrap; text-transform: uppercase; outline: none; box-shadow: none; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; cursor: pointer;"
                     data-x="['left','left','left','left']"
                     data-y="['top','top','top','top']"
                     data-hoffset="['53','53','53','30']"
                     data-voffset="['361','331','301','245']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-type="button"
                     data-responsive_offset="on"
                     data-responsive="off"
                     data-frames='[
                       {"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                       {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},
                       {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}
                     ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[12,12,12,12]"
                     data-paddingright="[35,35,35,35]"
                     data-paddingbottom="[12,12,12,12]"
                     data-paddingleft="[35,35,35,35]"><a href="{{url('courses')}}">Enrol Now</a>
                </div>
              </li>
              @endif
            @endforeach 
            </ul>

          <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(226, 149, 50, 1);"></div>
        </div>
      </div>
    