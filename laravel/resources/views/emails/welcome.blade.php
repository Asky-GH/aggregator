@component('mail::message')
# Поздравляем!

Добро пожаловать, {{ $user->name }}!

Вы успешно зарегистрировались на нашем сайте. Желаем Вам продуктивного обучения!

@component('mail::button', ['url' => 'http://127.0.0.1:8000/links'])
Начать изучать
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent
