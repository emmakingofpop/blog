<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class='bg-gray-400'>
<img class='w-1/6' src='https://media-s3-us-east-1.ceros.com/haymarket-media/images/2021/11/15/ed89b47cfddef5321e69d977de1656b6/prweek-logo-onwhite.png' alt='logo' />
    <div class='flex justify-center  h-30 mt-5 mb-5'>
        
        <h1>liste of news</h1>
        
    </div>
    <a href='/admin' class='bg-green-400 rounded-xl text-white text-center p-3 flex justify-center'>add a post </a>
    
    <div class='grid grid-cols-3 gap-4 content-start mt-5 '>
        @foreach($listevideo as $liste)
            <div class='w-150 h-50 ml-10 bg-white p-3' >
                <img src='{{$liste->link}}' alt='img' class='object-cover' />
                <h1>{{$liste->title}}</h1>

                <div class='flex p-5 justify-between '>
                    <a href='/edit/{{$liste->id}}' class='bg-green-300 p-5 rounded-xl'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </a>

                    <a  href='/delete/{{$liste->id}}' class='bg-red-300 p-5 rounded-xl' >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </a>
                </div>
                
            </div>
        @endforeach
    </div>
</body>
</html>