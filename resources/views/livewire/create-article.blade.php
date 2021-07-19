<div>
    
    <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl my-10 mx-auto rounded-lg border border-gray-300 shadow-xl">
        <div
        class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg"
        >
        <p class="font-semibold text-gray-800 text-xl">Create new Article</p>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Picture name</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="required!" wire:model="picture_name" required>
                            @error('picture_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" placeholder="required!" wire:model="title" required>
                            @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="border-2 border-gray-500 w-full h-72" wire:model="content" placeholder="required!">
                                
                            </textarea>
                            @error('content')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col items-center mb-4">
                            <label class="text-xl text-gray-600">Upload Picture <span class="text-red-500">*</span></label></br>
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' class="hidden"  wire:model="picture_path"/>
                            </label>
                            @error('picture_path')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-row justify-between w-full border-t-2">
                            <button wire:click="store()" type="submit" class="inline-flex justify-center rounded-md border-none bg-blue-700 p-4 my-10">
                                Save
                            </button>
                            <button wire:click="closeModal()" type="button" class="inline-flex justify-center rounded-md border-none bg-green-700 p-4 my-10">
                                Cancel
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'content' );
</script>
</div>
</div>
