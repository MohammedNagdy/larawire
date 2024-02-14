<form wire:submit="save" class="mt-4 container-sm align-middle justify-content-center align-items-center " style="width: 40rem;">
    <div class="input-group mb-3">
        <input wire:model="form.title" type="text" class="form-control" placeholder="task title" aria-label="Title" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <textarea wire:model="form.description" type="text" class="form-control" placeholder="task description" aria-label="Password" aria-describedby="basic-addon2"></textarea>
        <button class="btn btn-outline-primary" type="submit">Save</button>
    </div>
</form>
