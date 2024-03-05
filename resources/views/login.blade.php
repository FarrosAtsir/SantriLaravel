<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <div class="hero min-h-screen bg-base-200 p-16">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Login now!</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        </div>
        <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body">
            <div class="form-control">
            <label class="label">
                <span class="label-text">Email</span>
            </label>
            <input type="email" placeholder="email" class="input input-bordered"/>
            </div>
            <div class="form-control">
            <label class="label">
                <span class="label-text">Password</span>
            </label>
            <input type="password" placeholder="password" class="input input-bordered"/>
            <label class="label">
                <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
            </label>
            </div>
            <div class="form-control mt-6">
            <a href="/home" class="text-center btn btn-primary">Login</a>
            </div>
        </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>