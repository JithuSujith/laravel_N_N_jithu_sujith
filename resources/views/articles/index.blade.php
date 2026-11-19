<x-layout>
    <main>
        <div class="container-fluid p-0">
           <section class="row heros d-flex justify-content-center align-items-center text-center">
            <h1 class="my-5">ALL THE ARTICLES</h1>
            @foreach ($articles as $article)
               <article class="col-6 col-md-3 structure">
                <h3>{{$article->title}}</h3>
                <p>{{$article->description}}</p>
                <div><a href="{{ route('articlesShow',compact('article')) }}">View Detail</a></div>
               </article> 
               @endforeach
           </section>
        </div>
    </main>
</x-layout>