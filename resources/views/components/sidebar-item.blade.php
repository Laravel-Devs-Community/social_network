@props([
    'route',
    'label'
])

<a 
    href="{{ route($route) }}"
    class="relative flex flex-row items-center h-11 
        focus:outline-none 
        hover:bg-gray-100
        text-gray-600
        hover:text-gray-800
        border-l-4
        border-transparent
        {{-- hover:border-indigo-500 --}}
        rounded-xl
        pr-6 {{ request()->routeIs($route) ? 'bg-gray-200' :'' }}
        ">
    {{ $slot }}
    <span class="flex-1 ml-3 whitespace-nowrap">{{ $label }}</span>
</a>
