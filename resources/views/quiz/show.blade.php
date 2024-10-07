<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizz') }}
        </h2>
    </x-slot>
    <div class="container my-5">
        <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <h1 class="display-5 fw-normal">{{$quiz->title}}</h1>
                <p>{{$quiz->description}}</p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a class="btn btn-outline-warning mx-1" href="{{ route('quiz.edit', [$quiz]) }}" role="button">Edit »</a>
        <form action="{{ route('quiz.destroy', $quiz->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this quiz?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger mx-1">Delete »</button>
        </form>



    </div>

</x-app-layout>
