<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? "" }}</title>
</head>

<body>
    <header class=" w-full shadow mx-auto sticky">
        <nav class="p-5 flex justify-between px-20">
            <h1 class="font-semibold text-xl"><a href="/">Mini Blog</a></h1>
            <ul class="flex gap-9 ">
                <li class="{{ ($title === "Home" ? "border-b border-black" : "") }}"><a href="/">Home</a></li>
                <li class="{{ ($title === "About" ? "border-b border-black" : "") }}"><a href="/about">About</a></li>
                <li class="{{ ($title === "Blog" ? "border-b border-black" : "") }}"><a href="/blog">Blog</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>

</html>
