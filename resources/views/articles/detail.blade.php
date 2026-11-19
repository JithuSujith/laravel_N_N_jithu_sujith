<x-layout>
    <main>
        <div class="container-fluid p-0">
            <section class="row d-flex justify-content-center align-items-center hero">
                <article class="col-12 col-md-6">
                    <h1>{{$article->title}}</h1>
                     <p>{{$article->content}}</p>
                     <p class="card-text">Tags:</p>
                       <ul>
                        @foreach($article->tags as $tag)
                        <li>
                            {{$tag->name}}
                        </li>
                        @endforeach
                       </ul>
                     </p>
                     <form action="{{route('articlesDestroy',compact('article'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button><br>
                     </form>
                     <a href="{{route('articlesIndex',compact('article'))}}"><button type="submit" class="btn btn-primary mt-2">Return Back</button></a>
                     <a href="{{route('articlesEdit',compact('article'))}}"><button type="submit" class="btn btn-success mt-2">Edit</button></a>
                </article>
            </section>
        </div>
    </main>
</x-layout>