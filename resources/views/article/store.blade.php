<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="px-80 pt-24 mr-auto ml-auto">
    <form class="w-full" method="">
        @csrf
        <h1 class="text-2xl font-bold mb-5">Create an Article</h1>
        <div>
            <label for="name" class="text-black">Name</label>
            <input class="border-2 block  w-full mb-5 mt-5 p text-1xl outline-0 p-2 " id="name" type="text" name="name">
        </div>
        <div>
            <label for="price">Price</label>
            <input class="border-2 text-1xl w-full block mt-5 p-2 outline-0" id="price" type="number" name="price">
        </div>

        <br>
        <button class="bg-purple-700 text-white px-8 p-1  rounded text-xl" type="submit">Save</button>
    </form>
</body>
</html>
