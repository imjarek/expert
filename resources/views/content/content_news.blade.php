<div class="news__wrapper">
    <div class="row">
        @foreach($block->contents as $content)
            <div class="col-8">
                <p>{{ date('d-m-Y', strtotime($content->updated_at)) }}</p>
                <p class="news__item">
                    <div class="news__content">
                        {!! $content->content !!}
                    </div>
                </p>
            </div>
        @endforeach
    </div>
</div>