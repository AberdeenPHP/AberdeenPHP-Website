<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\ContactUsMessage;
use Illuminate\Support\Facades\Mail;

class ContactFormTest extends TestCase
{
    /** @test */
    public function a_user_can_view_contact_form()
    {
        $this->get(route('contact'))
            ->assertStatus(200)
            ->assertSeeText('Contact Us')
            ->assertDontSeeText('Thank you. We will be in touch shortly.');
    }

    /** @test */
    public function a_user_can_send_an_enquiry()
    {
        $data = [
            'name' => 'Danny Ock',
            'email' => 'the-artist-formerly-known-as-d-wil@example.org',
            'message' => 'Lorem Ipsum',
        ];

        $this->get(route('contact'));

        Mail::fake();

        $this->followingRedirects()
            ->post(route('contactform'), $data)
            ->assertSee('Thank you. We will be in touch shortly.')
            ->assertDontSeeText('Sorry - something went wrong');

        Mail::assertSent(ContactUsMessage::class, 1);
    }

    /** @test */
    public function enquiry_is_not_sent_on_failed_validation_of_request()
    {
        $data = [];

        $this->get(route('contact'));

        Mail::fake();

        $this->followingRedirects()
            ->post(route('contactform'), $data)
            ->assertSee('Sorry - something went wrong')
            ->assertDontSeeText('Thank you. We will be in touch shortly.');

        Mail::assertNotSent(ContactUsMessage::class);
    }

    /** @test */
    public function an_enquiry_name_has_a_minimum_length_of_3()
    {
        $data = [
            'name' => 'DO',
            'email' => 'acronymluva@example.org',
            'message' => 'ABPHPFTW',
        ];

        $this->post(route('contactform'), $data)
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function an_enquiry_name_has_a_maximum_length_of_100()
    {
        $data = [
            'name' => str_random(101),
            'email' => 'acronymluva@example.org',
            'message' => 'ABPHPFTW',
        ];

        $this->post(route('contactform'), $data)
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function an_enquiry_email_must_be_valid()
    {
        $data = [
            'name' => 'Danny Ock',
            'email' => 'invalidemail',
            'message' => 'Have you seen my ABPHP tattoo?',
        ];

        $this->post(route('contactform'), $data)
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function an_enquiry_message_has_a_minimum_length_of_3()
    {
        $data = [
            'name' => 'Danny Ock',
            'email' => 'acronymluva@example.org',
            'message' => 'AB',
        ];

        $response = $this->post(route('contactform'), $data)
            ->assertSessionHasErrors('message');
    }

    /** @test */
    public function an_enquiry_message_has_a_maximum_length_of_5000()
    {
        $data = [
            'name' => 'Danny Ock',
            'email' => 'acronymluva@example.org',
            'message' => str_random(5001),
        ];

        $response = $this->post(route('contactform'), $data)
            ->assertSessionHasErrors('message');
    }
}
