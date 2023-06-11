<div>
    {{-- https://tailwindcomponents.com/component/social-media-concept --}}
    
    <div class="block">

        {{-- Create post --}}
        <div class="pt-4">
            <form
                wire:submit.prevent="save"
                enctype="multipart/form-data"
                class="bg-white shadow rounded-lg mb-6 p-4 w-full">
                <textarea wire:model="text" name="message" placeholder="{{ __('Type something...') }}" class=" focus:outline-none  w-full rounded-lg p-2 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"></textarea>
                @error('text')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
                <footer class="flex justify-between mt-2">
                    <div class="flex gap-2">
                        <label for="image" class="flex flex-col items-center gap-2 cursor-pointer">
                            <span class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                            </span>
                        </label>
                        <input wire:model="image" name="image" id="image" type="file" class="hidden" />
                        @error('image') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    {{-- Post btn --}}
                    <button class="flex items-center py-2 px-4 rounded-lg text-sm bg-blue-600 text-white shadow-lg">{{ __('Post') }}
                        <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </button>
                </footer>
            </form>
        </div>

        @foreach ($this->posts as $post)

            <div class="bg-white shadow rounded-lg mb-6">
                <div class="flex flex-row px-1 py-3 mx-3">
                    {{-- User Avatar --}}
                    <div class="w-auto h-auto rounded-full">
                        <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" class="rounded-full h-12 w-12 object-cover">
                    </div>
                    {{-- User Name --}}
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class="text-gray-600 text-sm font-semibold">{{ $post->user->name }}</div>
                        <div class="flex w-full mt-1">
                            <div class="text-gray-400 font-thin text-xs">
                                {{ $post->creadoLindo() }}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Image --}}
                @if( $post->photo)
                    <div class="text-gray-400 font-medium text-sm mb-3 mx-3">
                        <div class="gap-2">
                            <div class="overflow-hidden rounded-xl">
                                <img class="h-full w-full object-cover max-h-80" src="{{ Storage::url( $post->photo ) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Body --}}
                @if( $post->text)
                    <div class="text-gray-500 bg-gray-100 rounded text-sm mx-3 p-2">{{ $post->text }}<span class="text-gray-400"></span></div>
                @endif
                {{-- Reactions --}}
                {{-- <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                        <span class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 w-8 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </span>
                        <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                            <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                        </span>
                    </div>
                </div> --}}
                {{-- Comments --}}
                <div class="flex w-full border-gray-100">
                    <div class="mt-1 mx-5 flex flex-row text-xs">
                        <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">Comments:<div class="ml-1 text-gray-400 text-ms"> 30</div></div>
                        <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">Views: <div class="ml-1 text-gray-400 text-ms"> 60k</div></div>
                    </div>
                    <div class="mt-1 mx-5 w-full flex justify-end text-xs">
                        <div class="flex text-gray-700  rounded-md mb-2 mr-4 items-center">Likes: <div class="ml-1 text-gray-400  text-ms"> 120k</div></div>
                    </div>
                </div>
                {{-- Comentar --}}
                <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                    <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" class="rounded-full h-10 w-10 object-cover">
                    {{-- Boton send --}}
                    <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                        <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                            <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <svg class="ml-1" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path> --}}
                            </svg>
                        </button>
                    </span>
                    {{-- Texto comentario --}}
                    <input type="search" class="ml-3 w-full py-2 pl-3 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="{{ __('Post a comment...') }}" autocomplete="off">
                </div>
            </div>
        @endforeach
            
    </div>
</div>
