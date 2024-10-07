<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizzes') }}
        </h2>
    </x-slot>

    <div class="container-md">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
                <h1 class="mb-3 text-center">Create Quiz</h1>
                <form method="post" action="{{route('quiz.store')}}" class="mb-3">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" required="">
                    </div>
                    <div class="form-group mt-2">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description" placeholder="Description" required=""> </textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a>
                            <button type="submit" class="btn btn-success btn-block">Create new Quiz</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
