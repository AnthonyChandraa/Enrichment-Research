<x-mail::message>
<strong>Hi, {{$destination}}</strong>

Please click the button below to verify your email address.

<x-mail::button :url="$url">
Button Text
</x-mail::button>

This link is only valid for 24 hours.
If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
