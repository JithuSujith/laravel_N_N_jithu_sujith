<x-layout>
    <main>
        <section class="container-fluid p-0">
          <div class="row hero d-flex align-items-center ps-3 my-3">
            <div class="col-12 col-md-5">
            <h1 class="heading">Modern <br> & <br> catchy</h1>
            </div>
            <div class="col-12 col-md-7 mt-3 ">
                <p class="fs-3 fw-bold fst-italic box p-5">
                    Discover the latest headlines, explore different perspectives, and stay up to date with what's happening around the globe. Your daily destination for news, knowledge, and information.
                     <a href="{{route('articlesIndex')}}"><button class="btn btn-light" type="button">Explore</button></a>
                
                </p>
                 
            </div>
          </div>
        </section>
        <section class="corpo">
         <div class="container-fluid p-0 mt-5">

        <h2 class="mb-4">Latest Articles</h2>

        <div class="row d-flex justify-content-evenly">

            @forelse($articles as $article)

                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">

                            <h5 class="card-title">
                                {{ $article->title }}
                            </h5>

                            <p class="card-text">
                                {{ $article->description }}
                            </p>

                            <a href="{{ route('articlesShow', $article) }}"
                               class="btn btn-primary">
                                Read More
                            </a>

                        </div>
                    </div>
                </div>

            @empty

                <p>No articles available yet.</p>

            @endforelse

        </div>
    </div>
        </section>
        
        <section class="">

        </section>

    </main>
</x-layout>