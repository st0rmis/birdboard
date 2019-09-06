<div class="bg-white rounded-lg shadow p-5" style="height: 200px;">
    <h3 class="font-normal text-lg py-2 -ml-5 mb-2 border-l-4 border-blue-99 pl-4">
        <a href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>
    <div class="text-gray-99">
        {{ Str::limit($project->description, 130) }}
    </div>
</div>

