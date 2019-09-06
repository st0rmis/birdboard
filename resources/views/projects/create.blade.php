@extends ('layouts.app')

@section('content')

        <h1>Create a project</h1>

        <form action="/projects" method="POST" accept-charset="utf-8">
            @csrf
           <input type="text" value="" name="title" id="title"/> 
           <textarea name="description" id=""></textarea>
           <button type="submit" value="">Create</button>
           <a href="/projects">Cancel</a>
        </form>

@endsection
