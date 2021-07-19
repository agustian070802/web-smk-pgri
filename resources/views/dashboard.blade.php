
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<div class="py-4">
    <div class="min-w-screen bg-gray-100 flex flex-col items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="container w-full flex justify-between items-center px-16">
            <form class="w-full bg-gray-300 rounded-xl mr-4 border-r py-3 px-10">
                <input class="border border-transparent bg-transparent w-full rounded-lg focus:outline-none focus:ring-purple-600 focus:border-transparent" placeholder="Search title ...">
            </form>
            <a href="{{ route('create-new-article') }}" class="bg-blue-500 hover:bg-blue-700 text-white hover:text-black focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 px-2 rounded-xl">
                Create new Article
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </a>
        </div>
        
        <div class="container lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto rounded-lg">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Creator</th>
                            <th class="py-3 px-6 text-left">Picture name</th>
                            <th class="py-3 px-6 text-center">Title</th>
                            <th class="py-3 px-6 text-center">content</th>
                            <th class="py-3 px-6 text-center">picture_path</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @forelse ($articles as $article)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125" src="{{ asset('storage/'. Auth::user()->profile_photo_path) }}"/>
                                    </div>
                                    <span class="font-medium">{{ $article->user->name }}</span>
                                </div>
                            </td>
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full" src="{{ asset('storage/'.$article->picture) }}"/>
                                    </div>
                                    <span>{{ $article->picture_name }}</span>
                                </div>
                            </td>
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-center">
                                <span>{{ $article->title }}</span>
                            </td>
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-center">
                                <span>{{ $article->content }}</span>
                            </td>
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-center">
                                <span>{{ $article->picture}}</span>
                            </td>
                            <td class=" overflow-hidden whitespace-nowrap overflow-ellipsis max-w-0 py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </button>
                                    <button wire:click="showUpdateForm({{ $article->id }})">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                    </button>
                                    <button wire:click="delete({{ $article->id }})">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @if ($updateStateId === $article->id)
                        <div>
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                        
                                        <div class="flex bg-gray-300 p-4 items-center">
                                            <a href="{{ route('dashboard') }}" class="bg-blue-500 px-4 rounded-md py-2 hover:text-white">
                                                <label class="text-xl text-gray-600 cursor-pointer"> << Back</label></br> 
                                            </a>
                                            <Label class=" mx-auto -ml-96">Edit Article</Label>
                                        </div>
                                        <div class="mb-4">
                                            <div class="p-6 bg-white border-b border-gray-200">
                                                <div class="mb-4">
                                                    <label class="text-xl text-gray-600">Picture name <span class="text-red-500">*</span></label></br>
                                                    <input wire:model="picture_name" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture_name" required>
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                                                    <input wire:model="title" type="text" class="border-2 border-gray-300 p-2 w-full" name="title" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="text-xl text-gray-600">Picture <span class="text-red-500">*</span></label></br>
                                                    <input wire:model="picture" type="text" class="border-2 border-gray-300 p-2 w-full" name="picture" required>
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
                                                        <button wire:click="update({{ $article->id }})" role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400 rounded-xl" required>Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty
                        <h1>Data tidak ditemukan!</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $articles->links() }}
        </div>
    </div>
    
    
</div>