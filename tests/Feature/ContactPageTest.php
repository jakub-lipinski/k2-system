<?php

use App\Mail\ContactMessageReceived;
use Illuminate\Support\Facades\Mail;

it('displays the contact page with company data', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertSee('K2System Robert Białogłowicz')
        ->assertSee('ul. Spółdzielcza 2')
        ->assertSee('5482751226')
        ->assertSee('525240321')
        ->assertSee('Formularz');
});

it('sends contact form messages to the company mailbox', function () {
    Mail::fake();

    $payload = [
        'name' => 'Jan Kowalski',
        'email' => 'jan@example.com',
        'phone' => '+48 600 700 800',
        'message' => 'Proszę o kontakt w sprawie dzierżawy kserokopiarki.',
    ];

    $this->post(route('contact.send'), $payload)
        ->assertRedirect(route('contact'))
        ->assertSessionHas('status');

    Mail::assertSent(ContactMessageReceived::class, function (ContactMessageReceived $mail) use ($payload) {
        return $mail->hasTo('biuro@ksero-k2system.pl')
            && $mail->contactData === $payload;
    });
});

it('does not send invalid contact form messages', function () {
    Mail::fake();

    $this->post(route('contact.send'), [
        'name' => '',
        'email' => 'niepoprawny-email',
        'message' => '',
    ])->assertInvalid(['name', 'email', 'message']);

    Mail::assertNothingSent();
});
