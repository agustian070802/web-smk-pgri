
    @foreach ($article as $item)
            
            <div class="max-w-full bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg sm:mb-6 md:mb-6">
                <div id="header" class="flex lg:flex-row md:flex-row sm:flex-col"> 
                    <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="{{asset('storage/' . $item->picture)}}" width="200"/>
                    <div class="flex flex-col justify-between w-full m-4  overflow-hidden truncate ">
                            <div class="flex flex-col">
                                <span class="text-2xl font-bold text-gray-700 truncate overflow-ellipsis">{{ $item->title }}</span>
                                <span class="text-gray-500 mt-2 text-xs">{{ $item->created_at->diffForHumans() }}</span>
                                <p class="mt-4 text-sm text-gray-700 truncate overflow-ellipsis w-auto">{{ $item->content }}</p>
                            </div>
                            <div class="flex mt-10 items-center justify-between">
                                <div class="flex flex-row items-center">
                                    <span class="text-black mr-2">ditulis oleh :</span>
                                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="{{asset('storage/' . $item->user->profile_photo_path)}}" />
                                    <p class=" text-gray-400 ml-2">{{ $item->user->name }}</p>
                                </div>
                                <a href="{{ route('detail-article', $item->id) }}" class="text-gray-500 sm:ml-32 hover:text-red-500 hover:underline">More...</a>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach
