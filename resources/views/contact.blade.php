@extends('app')
@section('title', 'Contact')
@section('content')
<div id="app">
    <navigation></navigation>
    <section class="section is-marginless is-paddingless">
    <div class="container">
        <div class="contactus">
            
            <form id="contact" action="https://formspree.io/{{ env('EMAIL_CONTACT') }}" method="post">
                <div class="title">GET IN TOUCH</div>
                    <fieldset>
                        <input type="text" name="name" placeholder="Name"  required>
                    </fieldset>
                    <fieldset>
                        <input type="email" name="email" placeholder="Email Address"  required>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="subject" placeholder="Subject" >
                    </fieldset>
                    <fieldset>
                        <textarea name="message" placeholder="Type your Message Here...." required></textarea>
                    </fieldset>
                    <fieldset>
                        <button type="submit" id="contact-submit">Submit</button>
                    </fieldset>
            </form>
        </div>
    </div>
    </section>
    <location></location>
    <copyright></copyright>
</div>
@endsection
