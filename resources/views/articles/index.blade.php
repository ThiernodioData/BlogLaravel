@extends('layouts.app')

@section('content')
    <!-- Latest Posts Section -->
    <section id="latest-posts" class="latest-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Latest Posts</h2>
        <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            @foreach ($articles as $article)
            <div class="col-lg-4">
                    <article>

                    <div class="post-img">
                        <img src="{{ asset($article['image']) }}" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">{{ $article['category'] }}</p>

                    <h2 class="title">
                        <a href="{{ route('articles.show', $article['slug']) }}">{{ $article['title'] }}</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset($article['author_image']) }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                        <p class="post-author">{{ $article['author'] }}</p>
                        <p class="post-date">
                            <time datetime="2022-01-01">{{ $article['date'] }}</time>
                        </p>
                        </div>
                    </div>

                    </article>
                </div><!-- End post list item -->

                
            @endforeach
        </div>
      </div>

    </section><!-- /Latest Posts Section -->
@endsection
