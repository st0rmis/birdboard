@extends ('layouts.app')

@section('content')

    <div class="lg:w-1/2 lg:mx-auto p-6 md:py-12 md:px-16 rounded shadow">

        <h1>Update a project</h1>

        <form 
            action="{{ $project->path() }}" 
            method="POST"
        >

        @method('PATCH')

        @include ('projects.form', [
            'buttonText' => 'Update Project',
            'cancelLink' => $project->path()
        ])

        </form>

    </div>

@endsection

