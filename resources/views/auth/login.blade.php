<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4 mt-lg-5">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email"
                        class="form-control"
                        name="email" :value="old('email')"
                        required autofocus autocomplete="username"
                        placeholder="example@example.com">
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                           class="form-control"
                           name="password"
                           required autocomplete="current-password"
                           placeholder="Enter your password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
