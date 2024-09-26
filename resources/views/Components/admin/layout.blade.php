<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="grid min-h-screen w-full md:grid-cols-[80px_1fr] lg:grid-cols-[200px_1fr]">
    <x-admin.sidebar/>
    <div class="flex flex-col">
        <x-admin.nav/>
        {{$slot}}
    </div>

</div>

</body>
</html>

