<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="d-flex py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 justify-content-center">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 mt-4 text-center">
            @foreach($quizzes as $quiz)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm h-100">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">{{$quiz->title}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="my-3">
                            {{$quiz->description}}
                        </p>
                        <a href="{{route('quiz.show', ['quiz' => $quiz->id])}}" type="button" class="w-100 btn btn-lg btn-outline-primary">Show Quiz</a>
                    </div>
                </div>
            </div>
            @endforeach
                <div class="col">
                    <div class="card h-100 mb-4 rounded-3 shadow-sm">
                        <div class="card-body bg-light">
                            <a href="{{route('quiz.create')}}">
                            <button style="min-height: 30vh" type="button" class="w-100 btn btn-lg btn-outline-success">Add new quizz</button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</x-app-layout>
