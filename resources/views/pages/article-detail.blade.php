@extends('pages.master')

@section('content')
<div class="pt-10 my-2 lg:my-2 bg-white text-gray-700">
  <div class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap md:flex-col pt-4 pb-12">
      <div class="col-span-6 mx-auto text-center mb-2">
        <h1 class="text-2xl font-bold">Article</h1>
      </div>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-36 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <main class="mt-10">
        
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
          <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
          <img src="{{ asset('storage/' .$article->picture) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
          <div class="p-4 absolute bottom-0 left-0 z-20">
            <a href="#"
            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Berita Utama</a>
            <h2 class="text-1xl font-semibold text-gray-100 leading-tight">
              {{ $article->title }}
            </h2>
            <div class="flex mt-3">
              <img src="{{ asset('storage/' .$article->user->profile_photo_path) }}"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
              <div>
                <p class="font-semibold text-gray-200 text-sm">{{ $article->user->name }}</p>
                <p class="font-semibold text-gray-400 text-xs">{{ $article->created_at->diffForHumans() }} </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md  mx-auto text-lg leading-relaxed overflow-x-hidden">
          <p class="text-black font-bold text-2xl">{{ $article->title }}</p>
          <p class="font-semibold mb-4 text-gray-400 text-xs">{{ $article->created_at->diffForHumans() }} </p>
          
          <p class="pb-6 text-black">{{ $article->content }}</p>
          
        </main>
        <!-- main ends here -->
      </div>
    </div>
  </div>
</div>
@endsection