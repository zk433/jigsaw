@extends('layouts.master')

@section('content')

@include('partials._header')

<section id="contact" class="grid-container">

    <div class="grid-x grid-margin-x">
      <div class="medium-6 cell">

				<p>I love receiving emails because connecting and collaborating with others is what the web is all about! </p>
				<p> So whether you have a question, a comment, or just want to chat, do get in touch!</p>
        
      </div>

      <div class="medium-6 cell">
        <form netlify-honeypot="bot-field" action="/success" data-netlify="true" name="contactMe" netlify >
            <p class="hidden">
                <label>Don’t fill this out: <input name="bot-field"></label>
            </p>
            <div class="medium-6 columns">
                <label>Name
                    <input type="text" placeholder="A nickname works too" name="sender" required>
                </label>
                <label>Email
                    <input type="email" name="_replyto" placeholder="A real one, please!" required>
                </label>
                <label>
                    Message
                    <textarea placeholder="So, what's up?" name="message" rows="4"></textarea>
                </label>
                <input type="submit" class="button expanded" value="Send" name="send">
            </div>
        </form>
            
      </div>
    </div>
	</section>
    
@endsection