<header>
    <nav class="menu-container menu-container_hidden" id="menu-container">
        <div class="menu">
            <div class="menu-right" id="menu-right">
                @include('components.navbar.navbar_right')
            </div>

            <div class="menu-top">
                <a class="menu-logo-gap"></a>
                @if(Route::is('home'))
                <a class="menu-logo">
                    <div class="menu-photo"></div>
                    {{--TODO менять добавлять ссылку на главную страницу в зависимости от текущей--}}
                    <div class="menu-item">
                        <div class="menu-link">Школа «Шамир»</div>
                    </div>
                </a>
                @else
                <a class="menu-logo" href="{{ route('home') }}">
                    <div class="menu-photo"></div>
                    <div class="menu-item">
                        <div class="menu-link">Школа «Шамир»</div>
                    </div>
                </a>
                @endif
                <div class="menu-line menu-line-main">

                    <div class="menu-items">
                        <a class="menu-item" href="{{ route('news') }}">
                            <div class="menu-link">Новости</div>
                        </a>
                        <a class="menu-item @if(Request::is('parents')) menu-item-parent @else active @endif" href="{{ route('parents') }}">
                            <div class="menu-link">Для Родителей</div>
                        </a>
                        <a class="menu-item @if(Request::is('students')) menu-item-parent @else active @endif" href="{{ route('students') }}">
                            <div class="menu-link">Для Учеников</div>
                        </a>
                        <a class="menu-item" href="{{ route('questions') }}">
                            <div class="menu-link">Советы и предложения</div>
                        </a>
                        <a class="menu-item" href="{{ route('questions') }}">
                            <div class="menu-link">Вопросы</div>
                        </a>

                    </div>
                    <div class="menu-blogpost" id="menu-blogpost"></div>
                </div>
                @yield('row')
            </div>
        </div>
    </nav>

    <nav class="mobile-menu-container">

        <input class="mobile-menu-toggler" id="mobile-menu-toggler" type="checkbox">


        <div class="mobile-menu">

            <a class="mobile-menu-logo" id="mobile-menu-logo">
                <div class="mobile-menu-photo"></div>
            </a>
            @if(Route::is('home'))
                <a class="mobile-menu-item mobile-menu-item-hidden">
                    <div class="mobile-menu-link">Лева Кондратьев</div>
                </a>

                <a class="mobile-menu-item mobile-menu-item-visible">
                    <div class="mobile-menu-link">Лева Кондратьев</div>
                </a>
            @else
                <a class="mobile-menu-item mobile-menu-item-hidden" href="{{ route('home') }}">
                    <div class="mobile-menu-link">Лева Кондратьев</div>
                </a>

                <a class="mobile-menu-item mobile-menu-item-visible" href="{{ route('home') }}">
                    <div class="mobile-menu-link">Лева Кондратьев</div>
                </a>
            @endif


            <label class="mobile-menu-hamburger" id="mobile-menu-hamburger" for="mobile-menu-toggler">
                <div class="mobile-menu-hamburger-inner"><span></span><span> </span><span></span></div>
            </label>

            <div class="mobile-menu-lines">
                <div class="mobile-menu-line mobile-menu-line-main">


                    <a
                        class="mobile-menu-items mobile-menu-languages"
                        href="#"
                    >
                        <div class="mobile-menu-language">
                            <div class="mobile-menu-link">en</div>
                        </div>
                        <div class="mobile-menu-language mobile-menu-language-selected">
                            <div class="mobile-menu-link">ру</div>
                        </div>
                        <div class="mobile-menu-language-separator"></div>
                    </a>

                    <div class="mobile-menu-items">

                        <a class="mobile-menu-item" href="#">
                            <div class="mobile-menu-link">Проекты</div>
                            <svg class="mobile-menu-arrow" xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path d="M0,0h8v8H6.5V1.5H0z"/></svg>
                        </a>
                        <a class="mobile-menu-item" href="#">
                            <div class="mobile-menu-link">Клуб</div>
                            <svg class="mobile-menu-arrow" xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path d="M0,0h8v8H6.5V1.5H0z"/></svg>
                        </a>
{{--                        <a class="mobile-menu-item" href="{{ route('school') }}">--}}
{{--                            <div class="mobile-menu-link">Школа</div>--}}
{{--                            <svg class="mobile-menu-arrow" xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path d="M0,0h8v8H6.5V1.5H0z"/></svg>--}}
{{--                        </a>--}}
{{--                        <a class="mobile-menu-item" href="{{ route('blog.posts.index') }}">--}}
{{--                            <div class="mobile-menu-link">Блог</div>--}}
{{--                            <svg class="mobile-menu-arrow" xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path d="M0,0h8v8H6.5V1.5H0z"/></svg>--}}
{{--                            <span class="mobile-menu-blogpost">&nbsp;&mdash; </span>--}}
{{--                        </a>--}}

                    </div>
                </div>
                @yield('row-mob')
            </div>

        </div>
    </nav>

    <div class="header-content">
        @include('components.admin.admin_panel')
    </div>
    <div class="menu-spacer"></div>

</header>
