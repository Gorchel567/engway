<article id="gallery">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center section-header">Галлерея</h2>
                <div class="owl-carousel owl-theme">
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
