<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Top Anime List @if ($page != 1)
            | page {{ $page }}
        @endif
    </title>
</head>

<body>
    <div class="bg-gray-900 text-white">
        <div class="container mx-auto p-1 pb-4 md:px-4 lg:px-12 xl:px-32">
            {{-- TITLE --}}
            <a href="/">
                <p class="font-bold underline py-2 text-lg lg:text-2xl">Top Anime List</p>
            </a>
            {{-- END TITLE --}}

            {{-- LIST CARD ITEM --}}
            <div class="sm:grid grid-cols-2 gap-4">
                @foreach ($topAnime['top'] as $anime)

                    {{-- CARD ITEM --}}
                    <div
                        class="w-full grid grid-cols-3 mb-2 sm:mb-0 bg-gray-800 rounded-md filter drop-shadow-md h-40 md:36">

                        {{-- THUMBNAIL --}}
                        <div class="relative">
                            <a href="{{ $anime['url'] }}">
                                <img class="rounded-l-md w-full object-cover h-40 md:36"
                                    src="{{ $anime['image_url'] }}">
                            </a>
                        </div>
                        {{-- END THUMBNAIL --}}

                        {{-- RANK ANIME --}}
                        <div class="absolute bg-red-500 rounded-tl-md" style="clip-path: polygon(0 0, 0% 100%, 100% 0);">
                            <p
                                class="text-xs md:text-sm ml-2 mt-2 mr-{{ strlen($anime['rank']) + 6 }} mb-{{ strlen($anime['rank']) + 4 }}">
                                {{ $anime['rank'] }}
                            </p>
                        </div>
                        {{-- END RANK ANIME --}}

                        {{-- ANIME INFORMATION --}}
                        <div class="col-span-2 px-2">
                            <p class=" font-semibold md:text-lg"><a
                                    href="{{ $anime['url'] }}">{{ $anime['title'] }}</a></p>
                            <p class=" text-sm md:text-base">{{ $anime['type'] }}
                                <span>({{ $anime['episodes'] }} eps)</span>
                            </p>
                            <p class="text-sm md:text-base">{{ $anime['start_date'] }} - {{ $anime['end_date'] }}
                            </p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="#fbad00">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <p class="text-sm md:text-base">
                                    {{ $anime['score'] }} <sub>({{ number_format($anime['members']) }}
                                        users)</sub>
                                </p>
                            </div>
                        </div>
                        {{-- END ANIME INFORMATION --}}

                    </div>
                    {{-- END CARD ITEM --}}

                @endforeach
            </div>
            {{-- END LIST CARD ITEM --}}

            {{-- NAVIGATION --}}
            <div class="flex justify-center mt-4">
                @if ($page > 1)
                    <a href="/page/{{ $page - 1 }}">
                        <div class="mx-2 bg-blue-800 py-1 px-3 rounded-md">&lt;&lt; Prev</div>
                    </a>

                @endif
                <a href="/page/{{ $page + 1 }}">
                    <div class="mx-2 bg-blue-800 py-1 px-3 rounded-md">Next &gt;&gt;</div>
                </a>
            </div>
            {{-- END NAVIGATION --}}
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-white">
        <hr>
        <p class="grid justify-items-center py-4">Unofficial Top Anime List</p>
    </footer>
    {{-- END FOOTER --}}

</body>

</html>
