<article id="gallery">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center section-header">Фото</h2>
                <div class="owl-carousel owl-theme blue-dot">
                    @foreach ($gallery as $path)
                        <div class="gallery-block">
                            <img src="{{$path}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</article>
