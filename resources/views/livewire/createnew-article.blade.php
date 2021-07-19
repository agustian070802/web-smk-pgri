<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create new Article
    </h2>
</x-slot>

<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="flex bg-gray-300 p-4">
                    <a href="{{ route('dashboard') }}" class="bg-blue-500 px-4 rounded-md py-2 hover:text-white">
                        <label class="text-xl text-gray-600 cursor-pointer"> << Back</label></br> 
                    </a>
                </div>
                <div class="mb-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Picture name <span class="text-red-500">*</span></label></br>
                            <input wire:model="picture_name" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture_name" required>
                            @error('picture_name') <span class="error text-red-500">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input wire:model="title" type="text" class="border-2 border-gray-300 p-2 w-full" name="title" required>
                            @error('title') <span class="error text-red-500">{{ $message }}</span> @enderror
                            
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Picture path in database <span class="text-red-500">*</span></label></br>
                            <input wire:model="picture" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture" readonly>
                            @error('picture') <span class="error text-red-500">{{ $message }}</span> @enderror
                            
                        </div>
                        
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea wire:model="content" name="content" class="shadow appereance-none border rounded border-gray-300 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="10"></textarea>
                            @error('content') <span class="error text-red-500">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="bg-grey-lighter my-4">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                @if ($picture)
                                <div class="flex text-center mt-1">
                                    {{-- <span>Gambar berhasil di unggah</span> --}}
                                    <p class="overflow-ellipsis overflow-hidden">{{ $picture->getClientOriginalName() }}</p>
                                </div>
                                @else
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <span class="text-xs">(Max 1mb)</span>
                                @endif
                                <input wire:model="picture" type='file' class="hidden" />
                                @error('picture') <span class="error text-red-500">{{ $message }}</span> @enderror
                            </label>
                        </div>
                        <hr class="mb-2">
                        <div class="flex justify-between my-2">
                            <blockquote class="text-gray-500 text-xs">Perlu di perhatikan dan fokus saat menulis artikel..</blockquote>
                            <button wire:click="createnewArticle()" class="bg-blue-600 p-2 rounded hover:bg-blue-700 hover:text-white">Create & Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
