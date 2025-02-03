<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in</title>
    <!-- CSS files -->
    <link href="{{ asset('admin/assets/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    <!-- tabler Icon CSS files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.21.0/tabler-icons.min.css" />
    <style>
        <style>@import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @vite(['resources/js/admin/login.js'])
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('admin/assets/static/logo.svg') }}" width="110" height="32" alt="Tabler"
                        class="navbar-brand-image">
                </a>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center">Rest Password</h2>

                    <form action="{{ route('admin.password.store') }}" method="POST" autocomplete="off" novalidate>
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-3">
                            <label class="form-label">Email address</label>

                            <input type="email" name="email" value="{{ old('email', $request->email) }}"
                                class="form-control" placeholder="your@email.com" autocomplete="off" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-2">
                            <label class="form-label">
                                Password

                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control password" name="password"
                                    placeholder="Your password" autocomplete="off" required>

                                <span class="input-group-text toggle-password">
                                    <a href="javascript:;" class="link-secondary" title="Show password"
                                        data-bs-toggle="tooltip"><i class="ti ti-eye"></i>
                                    </a>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Confirm Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control confirm-password"
                                    name="password_confirmation" placeholder="Your password" autocomplete="off"
                                    required>

                                <span class="input-group-text toggle-confirm-password">
                                    <a href="javascript:;" class="link-secondary" title="Show password"
                                        data-bs-toggle="tooltip"><i class="ti ti-eye"></i>
                                    </a>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('admin/assets/dist/js/tabler.min.js?1692870487') }}" defer></script>
</body>

</html>
