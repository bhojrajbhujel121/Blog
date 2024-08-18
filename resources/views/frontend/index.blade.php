<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('frontend/img/favicon.png')}}" type="{{asset('frontend/image/png')}}">
	<title>Fantasy Travel Blog</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.cssv')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
	<style>
   .description {
    display: none;
    margin-top: 10px;
}
.read-more {
    color: #007bff;
    text-decoration: none;
}
.read-more:hover {
    color:red;
}

</style>
</head>

<body>
@extends('frontend.main')
@include('frontend.includes.homebanner')
	<!--================Header Menu Area =================-->

	<!--================ Header Menu Area =================-->

	<!--================ Home Banner Area =================-->
	
	<!--================ End Home Banner Area =================-->

	<!--================ Travel Category Area =================-->

	
	
	
	<!--================ End Travel Category Area =================-->
	
	<!--================ Latest Blog Area =================-->
	
	
	
	
	
<section class="latest_blog_post">
		<div class="container">
        <div class="row">
			<div class="col-lg-12">
                <div class="main_title">
					<h1>Latest <br> Blog Posts.</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
		<div class="row" id="blog-container">
            @include('partials.blogs', ['blogs' => $blogs]) <!-- Initial blog posts -->
        </div>
        <div class="row">
			<div class="offset-lg-7 col-lg-4">
                <div class="blog-meta bottom d-flex justify-content-end align-items-center">
					<div>
						<a class="read_more" href="#" id="load-more" data-skip="6">Load More Posts</a>
                        <a class="read_more" href="#" id="reset-blogs" style="display:none;">Reset to Initial State</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section class="travel_category">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main_title">
					<h1>Best Travel Experience Within the Universe.</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row owl-carousel" id="travel_cat">
			<div class="single_travel wow fadeIn" data-wow-duration="1s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img /travel/t1.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t2.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t3.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t1.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t2.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t3.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t1.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
				<figure>
					<img class="img-fluid" src="{{asset('frontend/img/travel/t2.jpg')}}" alt="">
				</figure>
				<div class="overlay"></div>
				<div class="text-wrap">
					<h3>
						<a href="#">Waterfall Travel</a>
					</h3>
					<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<a href="#">
								<span class="icon fa fa-calendar"></span> March 14, 2018
								<span class="icon fa fa-comments"></span> 05
							</a>
						</div>
						<div>
							<a class="read_more" href="#">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->




<section class="categories">
    <div class="container">
        @foreach($category as $category)
            @if($category)
                <div class="category_section">
                    <h2>{{ $category->title }}</h2>
                    <!-- Display category blogs -->
                    <div class="row" id="category_blogs_{{ $category->id }}">
                        @forelse($category->blogs->take(6) as $blog)
                            <div class="col-lg-4 col-md-6 blog-item">
                                <div class="blog-card">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('blog/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </figure>
                                    <div class="text-wrap">
                                        <h3>
                                            <a href="{{ route('blog.display', $blog->id) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <div class="blog-meta d-flex justify-content-between align-items-center">
                                            <div class="meta">
                                                <span class="icon fa fa-calendar"></span> {{ $blog->created_at->format('F j, Y') }}
                                                <span class="icon fa fa-comments"></span> {{ $blog->comments_count }}
                                            </div>
                                        </div>
                                        <p class="description" id="description-{{ $blog->id }}" style="display:none; ">
                                            {{ $blog->description }}
                                        </p>
                                        <a href="#" class="read-more" data-blog-id="{{ $blog->id }}" data-toggle="description">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No blogs available for this category.</p>
                        @endforelse
                    </div>
                    <button class="show-more" data-category-id="{{ $category->id }}">Show More</button>
                </div>
            @endif
        @endforeach
    </div>
</section>







<!--================ End Latest Blog Area =================-->



<!--================ End Places Area =================-->

<!--================ Popular Post Area =================-->
@section('content3')
<section class="popular_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Popular <br> Posts to Remember</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p1.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p2.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p3.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p4.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">mountain range Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p5.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p6.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Pokhara Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p7.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#"> China Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p8.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Parks Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p9.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#"> Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
	<!--================ End Popular Post Area =================-->
<!--    contact -->


	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/loadMore.js')}}"></script>
	<script src="{{asset('frontend/js/readMore.js')}}"></script>
	<script src="{{asset('frontend/js/popper.js')}}')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}')}}"></script>
	<script src="{{asset('frontend/js/stellar.js')}}"></script>
	<script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/js/mail-script.js')}}"></script>
	<script src="{{asset('frontend/js/wow.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('frontend/js/theme.js')}}"></script>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</script>
<!-- JavaScript for Show More Functionality -->
<script>
$(document).ready(function() {
    // Toggle function for loading more blogs
    $('#load-more').click(function(e) {
        e.preventDefault();
        var skip = $(this).data('skip');
        $.ajax({
            url: '{{ route('blogs.loadMore') }}',
            method: 'GET',
            data: { skip: skip },
            beforeSend: function() {
                $('#blog-container').fadeTo('slow', 0.5);
            },
            success: function(data) {
                $('#blog-container').append(data);
                $('#load-more').data('skip', skip + 4);
                $('#blog-container').fadeTo('slow', 1);
                $('#reset-blogs').show();
            }
        });
    });


    // Toggle function for resetting blogs
    $('#reset-blogs').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: '{{ route('blogs.initial') }}',
            method: 'GET',
            beforeSend: function() {
                $('#blog-container').fadeTo('slow', 0.5);
            },
            success: function(data) {
                $('#blog-container').html(data);
                $('#load-more').data('skip', 4);
                $('#blog-container').fadeTo('slow', 1);
                $('#reset-blogs').hide();
            }
        });
    });

	document.addEventListener('DOMContentLoaded', function() {
    // Handle "Read More" and "Read Less"
    document.querySelectorAll('a[data-toggle="description"]').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            // Get the blog ID from the data attribute
            const blogId = this.getAttribute('data-blog-id');
            const description = document.getElementById('description-' + blogId);
            
            // Ensure description element exists
            if (description) {
                // Toggle the visibility of the description
                if (description.style.display === 'none' || description.style.display === '') {
                    description.style.display = 'block';
                    this.textContent = 'Read Less'; // Change text to "Read Less"
                } else {
                    description.style.display = 'none';
                    this.textContent = 'Read More'; // Change text back to "Read More"
                }
            }
        });
    });

    // Handle "Show More" functionality
    document.querySelectorAll('button.show-more').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.getAttribute('data-category-id');
            const categoryBlogs = document.getElementById('category_blogs_' + categoryId);
            const hiddenBlogs = Array.from(categoryBlogs.children).slice(6);

            hiddenBlogs.forEach(blog => blog.style.display = 'block'); // Show additional blogs
            this.style.display = 'none'; // Hide the "Show More" button
        });
    });

    // Initialize hidden blogs for each category
    document.querySelectorAll('.category_section').forEach(section => {
        const categoryBlogs = section.querySelector('.row');
        Array.from(categoryBlogs.children).slice(6).forEach(blog => blog.style.display = 'none'); // Hide additional blogs
    });
});



  
	});
</script>

</body>

</html>