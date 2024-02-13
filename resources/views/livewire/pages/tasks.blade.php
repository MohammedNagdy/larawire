<div>
    <livewire:components.task-form />
    {{$task}}
    @foreach($tasks as $task)
        <livewire:components.card key="{{now()}}" :title="$task['title']" :description="$task['description']"/>
    @endforeach
</div>
