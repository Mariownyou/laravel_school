@extends('layouts.app')

@section('title')
    @include('pages.home.image')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <h1 class="e2-smart-title">Про Нас</h1>
            @include('pages.home.about_us')
        </div>
        <div class="col-12 col-md-4">
            <section class="e2-heading-gallery">
                <div class="e2-section-heading mb-4">Наши Учителя</div>
                <div class="e2-notes-gallery e2-notes-gallery-2-rows">
                    <div class="e2-notes-gallery-area" style="grid-area: 1/1">
                        <div class="e2-notes-gallery-item  e2-notes-gallery-item-with-large-title">
                            <div class="e2-notes-gallery-text">
                                <div class="e2-notes-gallery-item-title  e2-notes-gallery-item-title-large"><a href="https://ilyabirman.ru/meanwhile/all/psevdokemp-priotkrytye-voprosy/" title="24 апреля 2013, 00:53">Римма Яковлевна</a></div>
                                <div class="e2-notes-gallery-item-summary">rimma@gmail.ru</div>
                                <div class="e2-notes-gallery-item-meta">
                                    <span title="24 апреля 2013, 00:53, GMT+06:00">+7 981 800 51 11</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="e2-notes-gallery-area" style="grid-area: 2/1">
                        <div class="e2-notes-gallery-item  e2-notes-gallery-item-with-large-title">
                            <div class="e2-notes-gallery-text">
                                <div class="e2-notes-gallery-item-title  e2-notes-gallery-item-title-large"><a href="https://ilyabirman.ru/meanwhile/all/psevdokemp-priotkrytye-voprosy/" title="24 апреля 2013, 00:53">Римма Яковлевна</a></div>
                                <div class="e2-notes-gallery-item-summary">rimma@gmail.ru</div>
                                <div class="e2-notes-gallery-item-meta">
                                    <span title="24 апреля 2013, 00:53, GMT+06:00">+7 981 800 51 11</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="e2-notes-gallery-area" style="grid-area: 3/1">
                        <div class="e2-notes-gallery-item  e2-notes-gallery-item-with-large-title">
                            <div class="e2-notes-gallery-text">
                                <div class="e2-notes-gallery-item-title  e2-notes-gallery-item-title-large"><a href="https://ilyabirman.ru/meanwhile/all/psevdokemp-priotkrytye-voprosy/" title="24 апреля 2013, 00:53">Римма Яковлевна</a></div>
                                <div class="e2-notes-gallery-item-summary">rimma@gmail.ru</div>
                                <div class="e2-notes-gallery-item-meta">
                                    <span title="24 апреля 2013, 00:53, GMT+06:00">+7 981 800 51 11</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="e2-notes-gallery-area" style="grid-area: 4/1">
                        <div class="e2-notes-gallery-item  e2-notes-gallery-item-with-large-title">
                            <div class="e2-notes-gallery-text">
                                <div class="e2-notes-gallery-item-title  e2-notes-gallery-item-title-large"><a href="https://ilyabirman.ru/meanwhile/all/psevdokemp-priotkrytye-voprosy/" title="24 апреля 2013, 00:53">Римма Яковлевна</a></div>
                                <div class="e2-notes-gallery-item-summary">rimma@gmail.ru</div>
                                <div class="e2-notes-gallery-item-meta">
                                    <span title="24 апреля 2013, 00:53, GMT+06:00">+7 981 800 51 11</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('pre-styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@endpush
