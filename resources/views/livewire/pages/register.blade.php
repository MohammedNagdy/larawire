<form wire:submit="register" class="container-sm p-4 align-middle justify-content-center rounded white-background align-items-center position-absolute" style="top: 50%; left: 50%;transform: translate(-50%,-50%);width: 40rem;">
    <div class="input-group mb-3">
        <input wire:model="form.username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input wire:model="form.email" type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input wire:model="form.password" type="password" class="form-control" placeholder="password" aria-label="Password" aria-describedby="basic-addon2">
        <button class="btn btn-outline-primary" type="submit">Sign up</button>
    </div>
</form>
