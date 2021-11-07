<article id="reviews">
    <div class="container">
        <h2 class="text-center section-header">Отзывы</h2>
        <hr class="eng-color-blue eng-height-two" />
        <div class="owl-carousel owl-theme blue-dot">
            @foreach ($reviews as $review)
            <div class="row review-block">
                <div class="col-lg-2 col-12 text-center">
                    <img src="{{$review['img']}}" alt="">
                </div>
                <div class="col">
                    <p class="reviews-header-title eng-color-blue">{{$review['name']}} <br class="d-sm-block d-md-none"> <span class="text-muted">{{$review['date']}}</span></p>
                    <p class="reviews-text">
                        <span class="d-none d-md-block">{{$review['text']}}</span>
                        <span class="d-sm-block d-md-none">{{$review['text_screen']}}</span>
                    </p>
                    <a href="{{$review['link']}}" target="_blank">Подробнее</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</article>
