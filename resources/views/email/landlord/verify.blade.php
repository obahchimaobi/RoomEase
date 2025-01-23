@component('mail::message')

# Hello {{ $name }},

Thank you for signing up for {{ config('app.name') }}. We're excited to help you find the perfect match for your rental needs!

To proceed and connect with potential tenants, we need to verify your email address. Please click the verification link sent to your email. The link is valid for 10 minutes.

Please verify your email by clicking the button below:

@component('mail::button', ['url' => $verificationUrl])
Verify Email
@endcomponent

---

### Why Verify Your Email?
- Confirm your identity and enhance trust with potential tenants.
- Access advanced features to manage your rental listings more effectively.
- Receive important updates and inquiries from interested tenants.

If you did not initiate this request, please disregard this email or contact our support team.

---

{{-- Footer Section --}}
Thank you for choosing {{ config('app.name') }} to assist with your rental needs!

{{ config('app.name') }} Team

@component('mail::subcopy')
If you’re having trouble clicking the "Verify Email" button, copy and paste the following URL into your web browser: [{{ $verificationUrl }}]({{ $verificationUrl }})
@endcomponent
@endcomponent
