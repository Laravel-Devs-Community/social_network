<x-guest-layout>

    <!-- component -->    
    <div class="bg-gray-50 flex items-center">
        <div class="w-full h-auto bg-[url('../../public/img/background.png')]">
            <section class="bg-cover bg-center py-32 w-full">
                <div class="bg-white bg-opacity-70 p-10">
                    <div class="container mx-auto text-left text-gray-800">
                        <div class="flex items-center">
                            <div class="lg:w-1/2">
                                <h1 class="text-5xl font-medium mb-6">{{ __('Welcome to') }} {{ Config::get('app.name') }}</h1>
                                <p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                <a href="{{ route('login') }}" class="mb:10 bg-green-500 text-white py-4 px-6 rounded-full hover:bg-green-600">{{ __('Login') }}</a>
                                <a href="{{ route('register') }}" class="sm:mt-15 bg-green-500 text-white py-4 px-6 rounded-full hover:bg-green-600">{{ __('Register') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
</x-guest-layout>