<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class='flex justify-between pt-5 ml-5'>
        <img class='w-1/12' src='https://media-s3-us-east-1.ceros.com/haymarket-media/images/2021/11/15/ed89b47cfddef5321e69d977de1656b6/prweek-logo-onwhite.png' alt='logo' />
        <div class='flex mr-5'>
            <p>us</p>
            <p class='font-bold'> | UK | </p>
            <p> Middle East | </p>
            <p> Asia</p>
        </div>
    </div>
    <div class='flex justify-between pt-5 ml-5  '>
        <div class='flex  justify-between w-2/4 cursor-pointer underline underline-offset-8 '>
            <p>Top 150</p>
            <p>News</p>
            <p>Campaigns</p>
            <p>Opinion</p>
            <p>Jobs</p>
            <p>Events</p>
            <p>Careers</p>
        </div>
        <div class='flex mr-5 border-double border-4 border-indigo-600'>
            <input type='text' placeholder='Search' />
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </div>
    </div>
    <div class='ml-5 border-b-4 pb-5'>
        <p></p>
        <div class='flex mt-10'>
            <img class='w-1/3' src='{{$lastvideo->link}}' alt='cnn' />
            <div class='ml-3 '>
                <h1 class='font-bold size-16 text-2xl'>{{$lastvideo->title}}</h1>
                <p class='mt-5'>{{$lastvideo->description}}</p>
            </div>
        </div>
    </div>

    <div class='mt-5 mb-5'>
        <h1 class='mb-5 ml-5'>Latest</h1>
        <div class='grid grid-cols-3 gap-4 content-start mt-5'>
            @foreach($listevideo as $liste)
                <div class='bg-gray-200  p-4 ml-5'>
                    <img src='{{$liste->link}}' alt='image' />
                    <div>
                        <h1 class='font-bold size-16 text-xl'>{{$liste->title}}</h1>
                        <p>{{$liste->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>