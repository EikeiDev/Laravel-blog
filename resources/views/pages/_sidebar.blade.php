<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
	
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Популярные публикации</h3>
            @foreach($popularPosts as $popularPost)
                <div class="popular-post">
                    <a href="{{ route('post.show', $popularPost->slug) }}" class="popular-img"><img src="{{ $popularPost->getImage() }}" alt="">
                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="{{ route('post.show', $popularPost->slug) }}" class="text-uppercase">{{ $popularPost->title }}</a>
                        <span class="p-date">{{ $popularPost->getDate() }}</span>

                    </div>
                </div>
            @endforeach
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Недавние публикации</h3>
            @foreach($recentPosts as $recentPost)
            <div class="thumb-latest-posts">
                <div class="media">
                    <div class="media-left">
                        <a href="{{ route('post.show', $recentPost->slug) }}" class="popular-img"><img src="{{ $recentPost->getImage() }}" alt="">
                            <div class="p-overlay"></div>
                        </a>
                    </div>
                    <div class="p-content">
                        <a href="{{ route('post.show', $recentPost->slug) }}" class="text-uppercase">{{ $recentPost->title }}</a>
                        <span class="p-date">{{ $recentPost->getDate() }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
    </div>
</div>