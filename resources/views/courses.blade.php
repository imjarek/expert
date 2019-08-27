@if (count($courses) > 0)
    @foreach($courses as $course)
        @if ($loop->index % 2 == 0)
            <div class="row mb-2" id="courses">
                @endif
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-400">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 course-caption">{{ $course->type->title }}</strong>
                        <strong class="d-inline-block mb-2 text-primary">{{ $course->announcement }}</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="courses/{{ $course->id }}">{{ $course->title }}</a>
                        </h3>
                        <h4 class="mb-0">
                            {{ $course->level }}
                        </h4>
                        <div class="mb-1 text-muted">{{ $course->duration }}</div>
                        <p class="card-text mb-auto">
                            {{ $course->description }}
                        </p>
                        <a href="courses/{{ $course->id }}">Узнать больше</a>
                        <div class="btn btn-sm {{ $course->inCart ? 'btn-success' : 'btn-info'}} to-shopping-cart-btn" data-id="{{ $course->id }}">{{ $course->inCart ? 'В корзине' : 'В корзину'}}</div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="" alt="" style="width: 200px; height: 250px;" src="storage/pics/{{ $course->preview }}" data-holder-rendered="true">
                </div>
            @if ($loop->index % 2 > 0)
            </div>
            @endif
        </div>
    @endforeach
@endif
