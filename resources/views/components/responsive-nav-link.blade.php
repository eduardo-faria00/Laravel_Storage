@props(['active'])

@php
    $classes = $active ?? false ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-violet-400 dark:border-violet-600 text-left text-base font-medium text-violet-700 dark:text-violet-300 bg-violet-50 dark:bg-violet-900/50 focus:outline-none focus:text-violet-800 dark:focus:text-violet-200 focus:bg-violet-100 dark:focus:bg-violet-900 focus:border-violet-700 dark:focus:border-violet-300 transition duration-150 ease-in-out' : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-800 dark:hover:text-zinc-200 hover:bg-zinc-50 dark:hover:bg-zinc-700 hover:border-zinc-300 dark:hover:border-zinc-600 focus:outline-none focus:text-zinc-800 dark:focus:text-zinc-200 focus:bg-zinc-50 dark:focus:bg-zinc-700 focus:border-zinc-300 dark:focus:border-zinc-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
