<form wire:submit="register" class="w-50 mt-20 container-sm align-middle justify-content-center align-items-center">
    <div class="input-group mb-3">
        <input wire:model="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input wire:model="email" type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input wire:model="password" type="password" class="form-control" placeholder="password" aria-label="Password" aria-describedby="basic-addon2">
        <button class="btn btn-outline-primary" type="submit">Sign up</button>
    </div>
</form>
