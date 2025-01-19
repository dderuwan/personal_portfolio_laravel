<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Portfolio of Deruwan</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <label class="text-center text-[#16f2b3] text-3xl font-bold"><h4>Deruwan Chalithanga</h4></label>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('about') }}">About</a>
                    </div>
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('experience') }}">Experience</a>
                    </div>
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('skills') }}">Skills</a>
                    </div>
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('education') }}">Education</a>
                    </div>
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('blog') }}">Blogs</a>
                    </div>
                    <div class="col text-center">
                        <a class=" link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('projects') }}">Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</body>

</html>
