@props(['disabled' => false, 'placeholder' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'bg-zinc-700 text-zinc-300 focus:border-violet-400 focus:ring-violet-400 rounded-md shadow-sm placeholder-zinc-500',
]) !!} placeholder='{{ $placeholder }}'>
