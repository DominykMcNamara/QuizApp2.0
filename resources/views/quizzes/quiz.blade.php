<x-layout>

    <header class="w-full py-4">

        <div class="flex justify-center space-x-4">

            <img src="{{$quiz->icon}}" alt="icon for {{$quiz->title}} quiz" class="">
            <strong class="my-auto text-bm desktop:text-hs">{{$quiz->title}}</strong>

        </div>

    </header>

    <div class="w-full h-screen grid grid-rows-3 desktop:grid-rows-2 tablet:grid-rows-3 grid-cols-1
desktop:grid-cols-2
place-items-center place-content-center px-4 desktop:px-0  ">


        <div class=" ">
            <div>
                <em class=" text-grey-navy text-[14px] tablet:text-[20px]">Question {{ $questions->currentPage() }} of {{
        $quiz->questions()
        ->count() }}</em>
            </div>

            @foreach($questions as $question)

                <strong class="text-[24px] tablet:text-hm">{{$question['question_text']}}</strong>

            @endforeach
        </div>

        <ul class="space-y-2">

            @foreach($answers as $answer)

                <li>
                    <a class="cursor-pointer desktop:text-hs">{{$answer['answer_text']}}</a>
                </li>

            @endforeach

        </ul>
    </div>
    {{ $questions->links() }}


</x-layout>


