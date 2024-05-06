<x-layout>
    <div class="flex-col mx-6 my-8 space-y-4">
        <div class="space-y-4">
            <h1 class="text-hm">Welcome to the <br> <strong> Frontend Quiz!</strong></h1>
            <h2 class="text-bm "><em>Pick a subject to get started</em></h2>
        </div>
        <div>
            <ul class="space-y-3">
                @foreach($quizzes as $quiz)
                    <li class="p-3 w-full bg-white rounded-lg shadow-md flex space-x-4 items-center ">
                        <x-icons.icon-html />
                        <strong>
                            {{$quiz['quiz']}}
                        </strong></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
