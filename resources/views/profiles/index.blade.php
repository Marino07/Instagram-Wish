<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="flex items-center"> <!-- Dodano items-center za vertikalno poravnanje -->
            <div class="w-1/4 mt-4 p-5">
                <div class="flex justify-center">
                    <img class="w-1/2 h-auto rounded-full object-cover" src="/storage/{{ $user->profile->image }}" alt="Slika">
                </div>
            </div>
            <div class="w-3/4 pt-5">
                <div class="flex justify-between">
                    <h1>{{ $user->username  }}</h1>
                    <a href="/p/create">Add new post</a>
                </div>
                <a href="/profile/{{ $user->id }}/edit">Edit profile</a>

                <div class="flex space-x-4 items-center">
                    <!-- Dodano items-center za vertikalno poravnanje u ovom div-u -->
                    <div><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div><strong>23k</strong> followers</div>
                    <div><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
            </div>
        </div>
        <div class="container mx-auto px-4 pt-5">
            <div class="grid grid-cols-3 gap-4">

                @foreach($user->posts as $post)
                    <div class="col-span-1 pb-3">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-full">

                        </a>
                    </div>

                @endforeach


        </div>
    </div>

    </div>
</x-app-layout>








