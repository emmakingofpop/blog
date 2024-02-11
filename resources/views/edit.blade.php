<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit post</title>
</head>
<body style='background-color: rgb(241 245 249);'>
    <div class="flex justify-center mt-10">
        <div class=' bg-white w-2/4 p-5'>
            <h1 class='text-2xl text-center'>Edit post</h1>
            <a href='/listevideo' class='bg-green-400 rounded-xl text-white text-center p-3 flex justify-center'>check the news liste </a>

            <form method="POST" action="/update/{{ $video->id }}">
                @csrf
                @method('PUT')
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title :</label>
                <input type="text" name='title' value="{{$video->title}}"  class="bg-gray-100 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title" required>
            </div>
            <div>
                <label for="first_name" class="pt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link :</label>
                <input type="text" name='link' value="{{$video->link}}"  class="bg-gray-100 h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Link" required>
            </div>
            <div>
                <label for="message" class="pt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name='description'  rows="4" class="bg-gray-100 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here...">
                {{$video->description}}
                </textarea>
            </div>

            <button class='mt-10 bg-green-500 w-64 h-10 rounded-xl '>UPDATE</button>

            </form>
        </div>

    </div>
</body>
</html>