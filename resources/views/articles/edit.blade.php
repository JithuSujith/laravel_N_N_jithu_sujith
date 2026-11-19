<x-layout>
    <main>
        <div class="container-fluid p-0">
          <div class="row heros d-flex justify-content-center align-items-center text center">
            <div class="col-12 col-md-6">
                <h1>Edit Your Article</h1>
               
                <form method="POST" action="{{route('articlesUpdate',compact('article'))}}" en>
                @csrf
                @method('put')
                <div class="mb-3">
                <label for="articleTitle" class="form-label">Article Title</label>
                <input type="text" class="form-control" id="articleTitle" name="title" value="{{$article->title}}"
                placeholder="Enter article title..." required>
                </div>

                <div class="mb-3">
                <label for="articleDescription" class="form-label">Article Description</label>
                <input type="text" class="form-control" id="articleDescription" value="{{$article->description}}" name="description"
                placeholder="Enter article description..." required>
                </div>

               <div class="mb-3">
               <label for="articleContent" class="form-label">Article Content</label>
               <textarea class="form-control" id="articleContent" rows="8" name="content"
               placeholder="Write your article here..." required>{{$article->content}}</textarea>
               </div>

               @foreach ($tags as $tag)
    <div class="form-check mb-3">

        <input
            type="checkbox"
            class="form-check-input"
            id="tag{{$tag->id}}"
            name="tag[]"
            value="{{$tag->id}}"
            @if($article->tags->contains($tag->id)) checked @endif
        >

        <label
            for="tag{{$tag->id}}"
            class="form-check-label"
        >
            {{$tag->name}}
        </label>

    </div>
@endforeach

               <button type="submit" class="btn btn-primary">Submit Article</button>
              </form>
            </div>
          </div>
        </div>
    </main>
</x-layout>