<button  {{ $attributes->merge(['class' =>'hover:cursor-pointer hover:opacity-80 rounded-lg'])
}}>
    {{ $slot }}
</button>
