<x-layout>
    <div class="h-screen place-content-center" x-data="questionForm()">
        <h1 class="text-hm tablet:text-hl text-center my-auto">Create a new <br> <strong> Question</strong></h1>
        <form class="flex flex-col space-y-2 p-5 w-96 mx-auto" id="question-form"
              enctype="multipart/form-data"
              action="/questions" method="POST">

            @csrf

            <div class="flex flex-col space-y-2 w-96">

                <label for="question_text" class="text-bm font-medium ">Question</label>
                <input type="text" name="question_text" id="question_text"
                       class="border border-dark-navy rounded-lg p-2">

            </div>

            <div class="flex flex-col space-y-2 w-96">

                <label for="quiz_id" class="block text-bm font-medium ">Quiz</label>
                <select name="quiz_id" id="quiz_id" class="border border-dark-navy rounded-lg p-2">>

                    @foreach($quizzes as $quiz)

                        <option value="{{ $quiz['id'] }}">{{ $quiz['title'] }}</option>

                    @endforeach

                </select>

            </div>
            <template x-for="(answer, index) in answers">
                <div class="flex flex-col space-y-4 w-96">

                    <div class="flex space-x-4">

                        <label :for="'answer_' + index" class=" my-auto text-bm font-medium ">Answer <span x-text="index +
                1"></span></label>

                        <input type="text" :id="'answer_' + index" :name="'answers[' + index + '][answer_text]'"
                               class="border border-dark-navy rounded-lg p-2" x-model="answer.answer_text" required>

                    </div>

                    <div class="flex space-x-4">

                        <label :for="'is_correct_' + index" class=" my-auto text-bm font-medium ">Is Correct</label>
                        <input class="cursor-pointer border-dark-navy" type="checkbox" :id="'is_correct_' + index"
                               :name="'answers[' + index +
                '][is_correct]'"
                               x-model="answer.is_correct" value="1">
                        <button @click="deleteAnswer(index)" type="button" x-show="answers.length > 2" class="bg-white text-bm
                    hover:bg-red
                    rounded
                    hover:cursor-pointer hover:border-red border px-4 border-dark-navy hover:text-white
                    rounded-lgp-2 transition"> Remove
                        </button>

                    </div>

                </div>

            </template>

            <button type="button" @click="addAnswer" class="bg-white w-96 text-bm hover:bg-purple
            hover:cursor-pointer hover:border-purple border transition
            border-dark-navy
            hover:text-white rounded-lg p-2">Add Another Answer
            </button>

            <button class="bg-white w-96 text-bm hover:bg-purple hover:cursor-pointer hover:border-purple border
            border-dark-navy
            hover:text-white rounded-lg p-2 transition"
                    type="submit">Submit
            </button>

        </form>

    </div>

    <script>
        function questionForm() {
            return {

                answers: [
                    {
                        answer_text: '',
                        is_correct: false
                    },
                    {
                        answer_text: '',
                        is_correct: false
                    }
                ],

                addAnswer() {
                    if (this.answers.length < 4) {
                        this.answers.push({
                            answer_text: '',
                            is_correct: false
                        });
                    }
                },
                deleteAnswer(index) {
                    if (this.answers.length > 2) {
                        this.answers.splice(index, 1);

                    }

                }
            }
        }
    </script>
</x-layout>
