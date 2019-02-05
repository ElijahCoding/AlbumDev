<ul class="list-group text-center">
  <a class="list-group-item {{ return_if(on_page('info/hacker-news'), 'active') }}"
     href="{{ route('hackernews.index') }}">
      Hacker News
  </a>

  <a class="list-group-item {{ return_if(on_page('info/reddit'), 'active') }}"
     href="{{ route('reddit.index') }}">
        Reddit
  </a>
</ul>
