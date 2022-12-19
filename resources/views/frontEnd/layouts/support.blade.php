<div class="section section-support" id="section-support">
    <div class="container">
        <div class="section-title text-center"><h2 class="section-title__title">Bạn cần hỗ trợ thêm</h2>
            <p class="section-title__description">Liên hệ với đội ngũ 24/7 của chúng tôi</p></div>
        <div class="section-support__list">
            <div class="row">
                <?php foreach ($data_system['supports'] as $sp){?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="section-support__list__item">
                        <div class="section-support__list__item__feature">
                            <img alt="{{$sp->title}}"
                                 srcset="{{ url('upload/shares/'.$sp->image) }} 1x, {{ url('upload/shares/'.$sp->image) }} 2x"
                                 src="{{ url('upload/shares/'.$sp->image) }}"
                                 width="67" height="65"
                                 decoding="async" data-nimg="1"
                                 class="section-support__list__item__feature__image"
                                 loading="lazy"
                                  style="color:transparent">
                            <h3 class="section-support__list__item__feature__title">{{$sp->title}}</h3>
                        </div>
                        <p class="section-support__list__item__content mb-1">{!! $sp->description !!}</p>

                    </div>
                </div>
             <?php }?>
            </div>
        </div>
    </div>
</div>
