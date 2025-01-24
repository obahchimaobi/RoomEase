@component('mail::message')

# Hello {{ $name }},

We received a request to reset your password for your {{ config('app.name') }} student account. If you made this request, you can reset your password by clicking the button below. The link is valid for 2 minutes.

Please reset your password by clicking the button below:

@component('mail::button', ['url' => $resetPasswordLink])
Reset Password
@endcomponent

---

### Why Reset Your Password?
- Secure your account and access to your accommodation search.
- Regain access to your account quickly and easily.
- Ensure your personal information remains safe.

If you did not request a password reset, please ignore this email or contact our support team immediately.

---

{{-- Footer Section --}}
Thank you for choosing {{ config('app.name') }} to find your perfect accommodation!

{{ config('app.name') }} Team

@component('mail::subcopy')
If you’re having trouble clicking the "Reset Password" button, copy and paste the following URL into your web browser: [{{ $resetPasswordLink }}]({{ $resetPasswordLink }})
@endcomponent
@endcomponent
