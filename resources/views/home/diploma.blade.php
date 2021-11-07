<article id="diploma" class="back-blue-img">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center section-header">Дипломы</h2>
                <div class="owl-carousel owl-theme">
                    @foreach ($diploma as $path)
                        <div class="gallery-block">
                            <img src="{{$path}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</article>
