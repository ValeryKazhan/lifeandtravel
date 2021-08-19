@props(['post'])

<article
    {{$attributes->merge(['class'=>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl '])}}>
    <div class="py-6 px-5">
        <x-post-action-links
            :post="$post"/>
        <div>
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-post-filter-parameters
                        :post="$post"
                    />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{$post->header}}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at}}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                   {{$post->body}}
                </p>

                <p class="mt-4">
                    {{$post->author->name}}
                </p>
            </div>
            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">Lary Laracore</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>

                <x-link-button
                    :link="'/post/'.$post->slug"
                >
                    Read More
                </x-link-button>

            </footer>
        </div>
    </div>
</article>
