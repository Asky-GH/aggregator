@component('mail::message')
# Внимание!

Уважаемый, {{ $user->name }}!

Ваша ссылка была удалена в связи с тем, что она не работает!

С уважением,<br>
{{ config('app.name') }}
@endcomponent