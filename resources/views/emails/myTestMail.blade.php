<!DOCTYPE html>
<html>

<head>
    <title>Email Test</title>
</head>

<body>
    <h1>{{ $mailInfo['title'] }}</h1>
    <p>{{ $mailInfo['body'] }}</p>

    <p>Thank you</p>
</body>

</html>
{{-- @component('mail::message')
    {{ $mailInfo['title'] }}

    Congratulations! Your account has been created.

    @component('mail::button', ['url' => $mailInfo['url']])
        Cheers!
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent --}}
