php -S 127.0.0.1:8080 -t public
http://127.0.0.1:8080/courses
http://127.0.0.1:8080/register
{
    "name": "Gigi Dvalishvili",
    "email": "gigi@example.com",
    "password": "password123",
    "password_confirmation": "password123",
    "role": "instructor"  // Optional, defaults to 'user' if not provided
}
php artisan reminders:send
