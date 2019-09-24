@csrf

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="title"></label>

    <div class="control">
        <input 
            type="text" 
            name="title" 
            class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full" 
            placeholder="Project title"
            required
            value="{{ $project->title }}"/>
    </div>

</div>

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="description"></label>

    <div class="control">
        <textarea 
            name="description" 
            class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
            placeholder="Project description"
            required
        >{{ $project->description }}</textarea>
    </div>

</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>
        <a href="{{ $cancelLink }}">Cancel</a>
    </div>
</div>

@if ($errors->any())
    <div class="field mt-6">
            @foreach ($errors->all() as $error)
                <li class="text-sm text-red-600">{{ $error }}</li>
            @endforeach
    </div>
@endif

