<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <title>Nowa wiadomość z formularza kontaktowego</title>
    </head>
    <body>
        <h1>Nowa wiadomość z formularza kontaktowego</h1>

        <p><strong>Imię i nazwisko / firma:</strong> {{ $contactData['name'] }}</p>
        <p><strong>E-mail:</strong> {{ $contactData['email'] }}</p>

        @if (! empty($contactData['phone']))
            <p><strong>Numer telefonu:</strong> {{ $contactData['phone'] }}</p>
        @endif

        <p><strong>Treść wiadomości:</strong></p>
        <p>{!! nl2br(e($contactData['message'])) !!}</p>
    </body>
</html>
