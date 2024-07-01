<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)

  <article class="my-2 mx-2 max-w-screen-md px-4 py-8 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl text-gray-900 tracking-light font-bold mb-2">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500 hover:underline">
      <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="text-gray-700 mb-4">
      {{ Str::limit($post['body'], 150) }}
    </p>
      <a href="/posts/{{ $post['slug']}}" class="text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach

</x-layout>