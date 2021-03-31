



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="lkjhADsi7lhd8igFsuHhjlsh5dGskFas86asas">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('fonts/nunito/nunito.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        input {
            min-width: 320px;
            padding: .5rem;
        }

        .bordered {
            border: 1px solid grey;
        }
        .centered {
            margin-left: auto;
            margin-right: auto;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flex-column {
            flex-direction: column;
        }
        .pad-2 {
            padding: 2%;
        }
        .pad-10 {
            padding: 10%;
        }
        .position-ref {
            position: relative;
        }

        .rounded {
            border-radius: 4px;
        }
        .top-1 {
            margin-top: 1%;
        }
        .top-10 {
            margin-top: 10%;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .center-content {
            text-align: center;
        }
        .right-content {
            text-align: right;
        }

        .row {
            margin: 1rem 0;
            width : 100%;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .w-50 {
            width: 50%;
        }
        .wmx-70 {
            max-width: 700px;
        }

    </style>

    <script defer src="{{ asset('js/common.js') }}"></script>
    <script defer src="{{ asset('js/FetchHttp.js') }}"></script>
</head>
<body>
    <div class="flex-center position-ref full-height">

        <div class="center-content">
            <div class="title m-b-md">
                Laravel 7 / Upload image (fetch)
            </div>

            <form id="image-uploader"
                class="flex-center flex-column bordered rounded pad-2 centered wmx-70"
                method="POST"
                action="{{ route('images.store') }}">

                <h2>Cargar imagen</h2>

                <div class="row form-group right-content">
                    <label for="image">
                        <strong>Cargar imagen</strong>
                        (PNG y JPEG)
                    </label>
                    <input type="file"
                        class="form-control bordered rounded top-1"
                        name="image"
                        id="image"
                        accept="image/x-png,image/jpeg">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row form-group right-content"
                    title="Las imágenes principales deben tener los atributos 'alt' y 'title'">
                    <label for="image-alt">
                        <strong>Contenido atributo "alt"</strong>
                    </label>
                    <input type="text" class="form-control"
                        name="image-alt" id="image-alt" r
                        equired
                        placeholder="Descripción corta de la imagen"
                        value="{{ (old('image-alt')) ? old('image-alt') : ($image->alt ?? '') }}">
                    @error('image-alt')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row form-group right-content"
                    title="Las imágenes principales deben tener los atributos 'alt' y 'title'">
                    <label for="image-title">
                        <strong>Contenido atributo "title"</strong>
                        (opcional)
                    </label>
                    <input type="text"
                    class="form-control"
                        name="image-title"
                        id="image-title"
                        placeholder="Título de ayuda para la imagen"
                        value="{{ (old('image-title')) ? old('image-title') : ($image->title ?? '') }}">
                    @error('image-title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row form-group right-content"
                    title="Un mensaje visible y descriptivo que aparecerá al pie de la imagen">
                    <label for="image-figcaption">
                        <strong>Mensaje visible (figcaption)</strong>
                        (opcional)
                    </label>
                    <input type="text"
                        class="form-control"
                        name="image-figcaption" id="image-figcaption"
                        placeholder="Texto visible para la imagen"
                        value="{{ (old('image-figcaption')) ? old('image-figcaption') : ($image->figcaption ?? '')}}">
                    @error('image-figcaption')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="button-group right-content row">
                    <button type="submit" class="btn btn-primary btn-small pad-2">
                        Subir imagen
                    </button>
                </div>

            </form>

        </div>
    </div>

    <script>
        // TODO:

    </script>
</body>
</html>

