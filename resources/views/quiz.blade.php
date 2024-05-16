<x-layout>
    @foreach($questions as $question)

        <h1>{{$question['title']}}</h1>

    @endforeach
<div class="">
        {{$questions->links()}}
</div>

</x-layout>


