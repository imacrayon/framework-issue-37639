<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Issue #37639</title>
    </head>
    <body>
        <p>Submitting this form will take you to the <strong>Success</strong> page.</p>
        <p>But, after running <code>php artisan route:cache</code>, submitting this form will redirect you to the <strong>Thing #1</strong> page instead.</p>
        <form method="post" action="{{ route('success') }}">
            @csrf
            <button>Submit</button>
        </form>
    </body>
</html>
