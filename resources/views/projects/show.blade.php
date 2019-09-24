@extends ('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-center">
            <p class="text-gray-99 text-sm font-normal"> 
                <a class="text-gray-99 text-sm font-normal" href="/projects">My projects</a> / {{ $project->title  }}
            </p>

            <a href="{{ $project->path().'/edit' }}" class="button">Update project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-99 font-normal mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form action="{{ $task->path() }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input type="text" value="{{ $task->body }}" name="body" class="w-full {{ $task->completed ? 'text-gray-99' : '' }}">
                                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf

                            <input class="w-full" placeholder="Add a new task" name="body">
                        </form>
                    </div>

                </div>
                <div>
                    <h2 class="text-lg text-gray-99 font-normal mb-3">General Notes</h2>
                    <form action="{{ $project->path() }}" method="post">
                        @method('PATCH')
                        @csrf
                      
                        <textarea name="notes" class="card w-full mb-4" style="min-height: 200;" placeholder="Anything to note?">{{ $project->notes }}</textarea>
                        <button type="submit" class="button">Update notes</button>
                    </form>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
            </div>
        </div>
    </main>
    <a href="/projects">Go Back</a>

@endsection
