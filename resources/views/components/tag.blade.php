@props(['size' => 'base'])

@php
    $classes = "bg-white/15 hover:bg-white/35 rounded-xl transition-colors-300 duration-300 font-bold px-3";

    if($size === 'base'){
        $classes .= ' px-5 py-1 text-sm';
    }
    if($size === 'small'){
        $classes .= ' px-2 py-1 text-2sm'; 
        
    }
@endphp
<a href="" class="{{ $classes }}"  }}>{{ $slot }}</a>
