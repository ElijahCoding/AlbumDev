<ul class="list-group">
  <a class="list-group-item {{ return_if(on_page('info/hacker-news'), 'active') }}"
     href="{{ route('hackernews.index') }}">
      Hacker News
  </a>
</ul>
