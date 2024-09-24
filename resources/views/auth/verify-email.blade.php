<div class="min-h-screen flex items-center justify-center bg-bg-sec">
    <div class="w-full max-w-md bg-bg-primary p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-primary mb-4">Verify Your Email</h1>
        <p class="text-text-sec mb-6">
            Please verify your email address by clicking the link we just sent to your inbox. If you didn't receive the email, you can request another one below.
        </p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-full px-4 py-2 bg-primary text-bg-primary font-semibold rounded-lg hover:bg-opacity-80 transition">
                Resend Verification Email
            </button>
        </form>
    </div>
</div>
