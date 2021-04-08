@extends('layouts.app')

@section('content')
    <div
        class="e2-responds-to-dark-mode e2-external-drop-target e2-external-drop-target-body e2-external-drop-target-altable">
        <div class="common">
            <div class="content">
                <div class="e2-heading">
                    <span class="admin-links admin-links-floating admin-links-sticky"></span>
                    <h2>Новая заметка</h2>
                </div>
                <form id="form-note" action="" enctype="multipart/form-data" method="post"
                      accept-charset="utf-8" autocomplete="off">
                    @csrf
                    <a id="e2-note-livesave-action" href="@ajax/note-livesave/"></a>

                    <div class="form" id="e2-note-form-wrapper">

                        @include('components.editor.title')
                        @include('components.editor.content')
                        @include('components.editor.title')
                        @include('components.editor.button')

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
