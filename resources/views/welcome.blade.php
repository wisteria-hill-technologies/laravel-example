<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-black">
        <div class="relative flex justify-center items-center text-white min-h-screen bg-center">
            <div>
                <h1 class="text-3xl">Todo List</h1>

                <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8" class="mb-4 py-3">
                    {{ csrf_field() }}

                    <label for="listItem">New Todo</label>
                    <br />
                    <input type="text" name="listItem" class="my-2 w-full p-1 text-black" />
                    <br />
                    <button type="submit" class="px-2 border round my-1">Save Item</button>
                </form>

                <div>
                    @foreach($listItems as $listItem)
                        <div class="flex mb-2 p-2 border border-2">
                            <p class="mr-3 w-40">{{ $listItem->name }}</p>
                            <form method="post" action="{{ route('markComplete') }}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <input type="number" name="itemId" value="{{$listItem->id}}" hidden/>
                                <button type="submit" class="">Mark Complete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
