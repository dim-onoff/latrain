<x-layouts.main>
    <div class="flex-1 space-y-5">
        @foreach($posts as $post)
            <div
                class="bg-white shadow rounded-lg @if($post->is_premium) border-4 border-yellow-400 @cannot('show premium-posts') blur-sm @endcannot @endif">
                <a href="{{ route('post.show',$post->slug) }}">
                    <img src="https://picsum.photos/800/350?random={{rand(0,100)}}" alt="Random image"
                         class="rounded-t">
                </a>
                <div class="p-5">
                    <div class="font-bold text-xs text-blue-700">{{ $post->created_at }}</div>
                    <div class="text-3xl text-blue-900">{{ $post->title }}</div>
                    <div class="text-lg text-gray-700">{{ $post->body }}
                    </div>
                </div>
                <div
                    class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                    <a href="mailto:{{ $post->user->email }}">{{ $post->user->name }}</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.main>
