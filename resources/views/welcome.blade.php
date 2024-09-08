@extends('layouts.app')
@section('title', 'HOME')

@section('content')
<div class="appHeader bg-primary">
    <div class="left"></div>
    <div class="pageTitle">
        @yield('title')
    </div>
    <div class="right"></div>
</div>

<div id="appCapsule">
    <div class="section full mt-2">
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/sample/photo/wide1.jpg') }}" alt="webview" class="imaged w-100">
                    </li>

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/sample/photo/wide2.jpg') }}" alt="webview" class="imaged w-100">
                    </li>

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/sample/photo/wide3.jpg') }}" alt="webview" class="imaged w-100">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section mt-2 mb-1">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Webview</h2>
                Turn your website into a fully functional Android app in no time.
            </div>
        </div>
    </div>

    <div class="listview-title">Feature Testing</div>
    <ul class="listview image-listview inset mb-1">
        <li>
            <a href="{{ route('testing.upload.index') }}" class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="folder-open-outline"></ion-icon>
                </div>
                <div class="in">
                    Manage Files
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('testing.embed.index') }}" class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
                <div class="in">
                    Media Embed
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('testing.webcam.index') }}" class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="camera-outline"></ion-icon>
                </div>
                <div class="in">
                    Open Webcam
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#DialogForm">
                <div class="icon-box bg-primary">
                    <ion-icon name="notifications-outline"></ion-icon>
                </div>
                <div class="in">
                    Push Notification
                </div>
            </a>
        </li>
    </ul>

    <div class="listview-title">Extra Features</div>
    <ul class="listview simple-listview inset mb-2">
        <li>Support Zoom</li>
        <li>Zoom Buttons</li>
        <li>Side ScrollBars</li>
        <li>Text Selection</li>
        <li>Save From Data</li>
        <li>Full Screen</li>
        <li>JavaScript APIs</li>
        <li>HTTPs Only Content</li>
        <li>Allow External URLs</li>
        <li>Confirm on Exit</li>
        <li>Enable GPS Prompt</li>
        <li>Disallow Screenshot</li>
        <li>Show Toolbar (Title)</li>
        <li>Live Toolbar Title</li>
        <li>Home Button</li>
        <li>Pull to Refresh</li>
        <li>Deep-linking</li>
        <li>Android TV Support</li>
    </ul>
</div>

<!-- Dialog Form -->
<div class="modal fade dialogbox" id="DialogForm" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Push Notification</h5>
            </div>
            <form action="{{ route('testing.webcam.notification') }}" method="POST">
                @csrf
                <div class="modal-body text-start mb-2">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label">Description</label>
                            <textarea class="form-control" name="description" required>{{ old('description') }}</textarea>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="btn-inline">
                        <button type="button" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-text-success">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- * Dialog Form -->
@endsection