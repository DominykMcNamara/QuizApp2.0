<x-layout>

    <div class=" w-full desktop:h-screen place-content-center grid-rows-2 desktop:grid-rows-1 tablet:grid-rows-2 grid
    desktop:grid-cols-2
    tablet:grid-cols-1
    desktop:place-content-center
    place-items-center
     ">

        <div class="space-y-4 desktop:space-y-10">

            <h1 class="text-hm tablet:text-hl ">Welcome to the <br> <strong> Frontend Quiz!</strong></h1>
            <h2 class="tablet:text-hs "><em>Pick a subject to get started</em></h2>

        </div>

        <div class="mobile:w-full tablet:w-[640px]">

            <ul class=" desktop:space-y-4">
                @foreach($quizzes as $quiz)

                    <a href="/quiz/{{$quiz['id']}}/questions">
                        <li class="text-bm hover:bg-purple hover:text-white hover:cursor-pointer
                        transition-all
                    desktop:text-hm tablet:text-hs
                     p-3
                    desktop:p-5 tablet:w-[640px]
                    bg-white rounded-lg
                    drop-shadow-sm flex space-x-4
                    items-center ">
                            <img src="{{$quiz['icon']}}" alt="{{$quiz['title']}}'s icon">
                            <strong>
                                {{$quiz['title']}}
                            </strong>
                        </li>
                    </a>

                @endforeach
            </ul>

        </div>

    </div>

</x-layout>
