@component('mail::message')
# New Subscription Received

You have received a new subscription request:

- **Name:** {{ $subscription->first_name }}
- **Email:** {{ $subscription->email }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
