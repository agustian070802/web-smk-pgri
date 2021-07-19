<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Update Article
    </h2>
</x-slot>

<div>
    @if ($updateStateId === $article->id)
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="flex bg-gray-300 p-4 justify-center">
                        <label class="text-xl text-gray-600 font-bold">Update Article</label></br> 
                </div>
                <div class="mb-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Picture name <span class="text-red-500">*</span></label></br>
                            <input wire:model="picture_name" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture_name" >
                        </div>
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input wire:model="title" type="text" class="border-2 border-gray-300 p-2 w-full" name="title" >
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Picture <span class="text-red-500">*</span></label></br>
                            <input wire:model="picture" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture" >
                        </div>
                        
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea wire:model="content" name="content" class="shadow appereance-none border rounded border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10"></textarea>
                        </div>
                        
                        <div class="flex p-1 justify-between">
                            {{-- <div class="flex items-center justify-center">
                                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="mt-2 text-base leading-normal">Select a file</span>
                                    <input type='file' wire:model="picture" class="hidden" />
                                </label>
                            </div> --}}
                            <div class="flex items-center ">
                                
                                <button wire:click="update($articleId)" role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400 rounded-xl" required>Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

