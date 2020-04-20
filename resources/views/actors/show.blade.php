@extends('layouts.main')

@section('content')

<div class="actor-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="{{ $actor['profile_path'] }}" alt="profile image" class="w-76">
            <ul class="flex items-center mt-4">
                @if ($social['instagram'])
                <li>
                    <a href="{{ $social['instagram'] }}" title="Instagram">
                        <svg viewBox="0 0 24 24" class="fill-current text-gray-400 hover:text-white w-6">
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913a5.885 5.885 0 001.384 2.126A5.868 5.868 0 004.14 23.37c.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.898 5.898 0 002.126-1.384 5.86 5.86 0 001.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.89 5.89 0 00-1.384-2.126A5.847 5.847 0 0019.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 01-.899 1.382 3.744 3.744 0 01-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 01-1.379-.899 3.644 3.644 0 01-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 100 12.324 6.162 6.162 0 100-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 01-2.88 0 1.44 1.44 0 012.88 0z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($social['twitter'])
                <li class="ml-6">
                    <a href="{{ $social['twitter'] }}" title="Twitter">
                        <svg viewBox="0 0 24 24" class="fill-current text-gray-400 hover:text-white w-6">
                            <path
                                d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($social['facebook'])
                <li class="ml-6">
                    <a href="{{ $social['facebook'] }}" title="Facebook">
                        <svg viewBox="0 0 24 24" class="fill-current text-gray-400 hover:text-white w-6">
                            <path
                                d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                        </svg>
                    </a>
                </li>
                @endif
                @if ($actor['homepage'])
                <li class="ml-6">
                    <a href="{{ $actor['homepage'] }}" title="Website">
                        <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 128 128"
                            class="fill-current text-gray-400 hover:text-white w-6">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff
                                    }

                                    .cls-2 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-miterlimit: 15;
                                        stroke-width: 10px
                                    }
                                </style>
                            </defs>
                            <path class="cls-1"
                                d="M64 16a47.5 47.5 0 11-47.5 47.5A47.55 47.55 0 0164 16m0-6.5a54 54 0 1054 54 54 54 0 00-54-54z" />
                            <path class="cls-1"
                                d="M65.08 16c2.09 0 5.78 3.66 8.93 11.69 3.71 9.46 5.75 22.18 5.75 35.81s-2 26.35-5.75 35.81c-3.15 8-6.83 11.69-8.93 11.69s-5.78-3.66-8.93-11.69c-3.7-9.46-5.75-22.18-5.75-35.81s2-26.35 5.75-35.81C59.31 19.65 63 16 65.08 16m0-6.5c-11.7 0-21.18 24.18-21.18 54s9.48 54 21.18 54 21.18-24.18 21.18-54-9.48-54-21.18-54z" />
                            <path class="cls-2" d="M17.66 80.37h94.84M17.66 46.62h94.84" />
                        </svg>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl mt-6 md:mt-0 font-semibold">{{ $actor['name'] }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 22.619 22.619">
                    <path
                        d="M20.183 20.343h-.476V18.08a.513.513 0 01-.267.075c-1.003 0-1.802-.3-2.377-.891a2.766 2.766 0 01-.309-.38 2.542 2.542 0 01-.245.317c-.571.633-1.418.953-2.515.953-1.004 0-1.803-.3-2.378-.891a2.842 2.842 0 01-.309-.38 2.542 2.542 0 01-.245.317c-.572.633-1.418.953-2.515.953-1.003 0-1.803-.3-2.378-.891a2.757 2.757 0 01-.308-.38 2.64 2.64 0 01-.245.317c-.572.633-1.419.953-2.516.953a.52.52 0 01-.194-.038v2.227h-.472a.76.76 0 00-.759.759v.76c0 .419.34.759.759.759h17.749a.76.76 0 00.76-.759v-.76a.76.76 0 00-.76-.757z"
                        fill="#fff" />
                    <path
                        d="M4.837 16.495c.405-.447.461-1.051.464-1.313a2.076 2.076 0 01-.005-.199.527.527 0 011.05-.037c.001.011.008.083.008.197.021.276.12.928.578 1.394.369.376.913.565 1.617.565.787 0 1.371-.203 1.735-.606.406-.447.461-1.051.464-1.313-.007-.115-.006-.188-.006-.199a.527.527 0 011.05-.037c.001.011.007.083.008.197.021.276.12.928.578 1.394.369.376.912.565 1.617.565.787 0 1.37-.203 1.734-.606.405-.447.461-1.051.464-1.313-.007-.115-.006-.188-.006-.199a.528.528 0 011.051-.037c.001.011.008.083.008.197.021.276.12.928.578 1.394.369.376.912.565 1.616.565.099 0 .188.029.267.075v-2.434a.759.759 0 00-.759-.759h-.496v-1.925a.447.447 0 01-.227.063c-.854 0-1.534-.255-2.022-.758a2.214 2.214 0 01-.262-.322c-.062.092-.13.183-.209.27-.486.538-1.206.811-2.14.811-.853 0-1.533-.255-2.022-.758a2.282 2.282 0 01-.262-.322 2.24 2.24 0 01-.208.27c-.487.538-1.207.811-2.139.811-.853 0-1.534-.255-2.022-.758a2.44 2.44 0 01-.263-.322c-.06.092-.129.183-.208.27-.487.538-1.207.811-2.14.811a.453.453 0 01-.165-.032v1.894h-.496a.76.76 0 00-.759.759v2.397a.52.52 0 01.194-.039c.787-.005 1.371-.208 1.735-.611z"
                        fill="#fff" />
                    <path
                        d="M5.804 10.711c.345-.382.393-.895.395-1.119-.006-.097-.005-.158-.005-.168a.447.447 0 01.893-.032c.001.01.007.071.007.168.018.235.102.789.491 1.186.314.32.777.481 1.376.481.669 0 1.166-.174 1.476-.516.345-.382.393-.895.395-1.119-.007-.097-.005-.158-.005-.168a.449.449 0 01.893-.032c.001.01.006.071.007.168.018.235.102.789.491 1.186.313.32.776.481 1.375.481.67 0 1.166-.174 1.477-.516.345-.382.392-.895.395-1.119-.007-.097-.006-.158-.006-.168a.449.449 0 01.894-.032c.001.01.007.071.008.168.018.235.101.789.49 1.186.313.32.776.481 1.376.481a.45.45 0 01.227.063V9.221a.646.646 0 00-.646-.646h-4.931V4.427s.447-.494 0-.463c-.449.031-.708.336-1.444.518-.075.019-.146.03-.217.044a.796.796 0 01.249-.445c.243-.226.361-.471.351-.727-.015-.402-.344-.669-.358-.681a.138.138 0 00-.173.216c.002.002.246.203.256.477.003.172-.086.344-.266.513a1.057 1.057 0 00-.34.691c-.342.04-.803.007-1.194-.051-.39-.058 0 .53 0 .53v3.525H4.809a.646.646 0 00-.646.646v2.038a.43.43 0 01.165-.032c.67.001 1.166-.173 1.476-.515z"
                        fill="#fff" />
                    <path
                        d="M11.062 0c-2.212 2.574-.724 3.78-.307 4.047.068-.125.154-.241.264-.343.082-.077.179-.191.175-.301-.004-.118-.117-.24-.156-.274a.416.416 0 01.218-.733.403.403 0 01.305.088c.046.037.443.372.462.886.008.217-.056.423-.178.619.119.027.288-.068.599-.486C13.32 1.476 11.062 0 11.062 0z"
                        fill="#fff" /></svg>
                <span class="ml-2">{{ $actor['birthday'] }} ( {{ $actor['age'] }} years old ) in
                    {{ $actor['place_of_birth'] }}</span>
            </div>

            <div class="text-gray-300 mt-8">
                {{ $actor['biography'] }}
            </div>

            <div class="mt-12">
                <h4 class="mt-12 font-semibold">Known For</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach ($knownForMovies as $movie)
                    <div class="mt-4">
                        <a href="{{ $movie['linkToPage'] }}">
                            <img src="{{ $movie['poster_path'] }}" alt="poster"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                            <a href="{{ $movie['linkToPage'] }}"
                                class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{ $movie['title'] }}</a>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div> <!-- end actor info -->
</div>

<div class="credits border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl text-semibold">Credits</h2>
        <ul class="list-disc leading-loose pl-5 mt-8">
            @foreach ($credits as $credit)
            <li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as
                {{ $credit['character'] }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
