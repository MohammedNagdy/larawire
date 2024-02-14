<div>
    <livewire:components.task-form />
    @foreach($tasks as $index => $task)
        <livewire:components.card key="{{now()}}" :title="$task['title']" :description="$task['description']"/>
    @endforeach
</div>
