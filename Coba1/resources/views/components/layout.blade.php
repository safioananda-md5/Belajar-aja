<!doctype html>
<html lang="en">

<head>
    <x-head></x-head>
    <title>Hello, world!</title>

    <style>
        body {
            font-family: "Comic Relief", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        h1,
        h5 {
            font-family: "Comic Relief", system-ui;
            font-weight: 700;
            font-style: normal;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>

    ⁡⁢⁣⁡⁣⁢⁣{{-- Start Content Here --}}⁡

    <div class="container">
        {{ $slot }}
    </div>

    ⁡⁣⁢⁣{{-- End Content Here --}}⁡
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
