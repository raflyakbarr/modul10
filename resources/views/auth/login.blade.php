<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Data Master</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-primary">
    <div class="container-sm mt-5">
        <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-1 text-center">
                            <i class="bi-hexagon-fill text-primary fs-1"></i>
                            <h4>Employee Data Master</h4>
                            <br>
                            <hr>
                        </div>

                    <div class="row">
                        <div class=" mb-3">
                            <label for="email" class="form-label"></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter Your Email" autofocus>
                                @error('email')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                        </div>

                        <div class="text-center">
                            <div class="col-md-12 d-grid ">
                                <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>