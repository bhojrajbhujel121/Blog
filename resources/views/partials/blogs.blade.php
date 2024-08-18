@foreach ($blogs as $blog)
    <div class="col-lg-6 col-md-12">
        <div class="single_travel wow fadeInUp" data-wow-duration="1s">
            <figure>
                <img class="img-fluid w-100" src="{{ asset('blog/' . $blog->image) }}" alt="{{ $blog->title }}">
            </figure>
            <div class="overlay"></div>
            <div class="text-wrap">
                <h3>
                    <a href="#">{{ $blog->title }}</a>
                </h3>
                <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                    <div class="meta">
                        <!-- Meta information can go here -->
                    </div>
                    <div>
                        <a class="read_more" href="#" data-toggle="description" data-blog-id="{{ $blog->id }}">Read More</a>
                    </div>
                </div>
                <div class="blog-description" id="description-{{ $blog->id }}" style="display: none; color:white;">
                    {{ $blog->description }}
                </div>
            </div>
        </div>
    </div>
@endforeach
