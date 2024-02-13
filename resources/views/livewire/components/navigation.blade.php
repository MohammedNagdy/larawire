<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        @auth()
            <a class="navbar-brand" href="/tasks" wire:navigate>Larawire</a>
        @else
            <a class="navbar-brand" href="/" wire:navigate>Larawire</a>
        @endif
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth()
                <li class="nav-item">
                    <a class="nav-link active" href="/tasks" wire:navigate>Tasks</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login" wire:navigate>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register" wire:navigate>Sign up</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
