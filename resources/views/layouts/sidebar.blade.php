<div class="col-md-4">
    <aside class="right-sidebar">
        <!--
        <div class="search-widget">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-lg btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </div>
        -->

        <div class="widget">
            <div class="widget-heading">
                <h4>Categories</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('category', $category->slug) }}"><i class="fa fa-angle-right"></i> {{ $category->title }}</a>
                            <span class="badge pull-right">{{ $category->posts->count() }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="widget">
            <div class="widget-heading">
                <h4>Popular Posts</h4>
            </div>
            <div class="widget-body">
                <ul class="popular-posts">
                    @foreach ($popularPosts as $post)
                        <li>
                            @if ($post->image_thumb_url)
                                <div class="post-image">
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <img src="{{ $post->image_thumb_url }}" />
                                    </a>
                                </div>
                            @endif
                            <div class="post-body">
                                <h6><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h6>
                                <div class="post-meta">
                                    <span>{{ $post->date }}</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Useful Links</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                    <li>
                        <a href="//caniuse.com/"><i class="fa fa-angle-right"></i> Can i use?</a>
                    </li>
                    <li>
                        <a href="//www.javascripting.com/"><i class="fa fa-angle-right"></i> Javascript Libraries</a>
                    </li>
                    <li>
                        <a href="https://themeforest.net/?ref=NativeTab"><i class="fa fa-angle-right"></i> Themeforest</a>
                    </li>
                    <li>
                        <a href="https://www.hidemyass.com/vpn/r16103/"><i class="fa fa-angle-right"></i> Hidemyass VPN</a>
                    </li>
                    <li>
                        <a href="https://m.do.co/c/7db57ba73c92"><i class="fa fa-angle-right"></i> Digital Ocean</a>
                    </li>
                    <li>
                        <a href="//www.devstup.org"><i class="fa fa-angle-right"></i> Devstup</a>
                    </li>

                </ul>
            </div>
        </div>


    </aside>
</div>
