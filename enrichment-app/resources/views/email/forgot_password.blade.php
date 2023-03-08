<x-mail::message>

Dear {{$destination}},

If you've lost your password or wish to reset it, use the link below to get started
<x-mail::button :url="$url">
Reset Password
</x-mail::button>

This link is only valid for 24 hours.
If you did not request a password reset, you can safely ignore this email.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
