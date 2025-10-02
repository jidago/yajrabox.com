<blockquote class="relative flex flex-col w-full bg-white p-5 border border-gray-200 break-inside-avoid-column">
    <a href="{{ $project['doc_url'] }}" class="text-blue-800 hover:text-blue-500">
        <h3 class="text-xl font-bold">{{ package_to_title($project['name']) }}</h3>
    </a>

    <p class="mt-2 text-gray-700">
        {{ $project['description'] }}
    </p>

    <div class="mt-5 flex items-start gap-4">
        <img src="{{ $project['owner']['avatar_url'] }}"
             class="w-10 h-10 object-cover object-center"
             alt="{{ $project['full_name'] }}">

        <a href="{{ $project['html_url'] }}" class="text-xs">
            <cite class="not-italic font-medium">{{ $project['full_name'] }}</cite>

            <p class="text-gray-700">
                {{ $project['description'] }}
            </p>
        </a>
    </div>

    <div class="flex space-x-2 mt-4">
        <a href="{{ $project['html_url'] }}" class="flex">
            <span>{{ number_format($project['stargazers_count']) }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
            </svg>
        </a>
        <a href="{{ $project['html_url'] }}/issues" class="flex">
            {{ $project['open_issues'] }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z"/>
            </svg>
        </a>
        <a href="{{ $project['html_url'] }}/network" class="flex">
            {{ $project['forks_count'] }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
            </svg>
        </a>
    </div>

    <ul class="flex flex-wrap items-center space-x-2 mt-4">
        @foreach($project['versions'] as $version)
            @if($loop->first)
                <li class="text-xs">Doc Versions:</li>
            @endif

            <li>
                <a href="{{ route('docs.version', [$project['doc'], Str::lower($version)]).$project['section'] }}"
                   class="bg-blue-500 px-1 rounded border text-white text-xs"
                >{{ $version }}</a>
            </li>
        @endforeach
    </ul>
</blockquote>
