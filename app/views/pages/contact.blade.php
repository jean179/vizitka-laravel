@extends('layouts.services')

@section('content')
<div class="contact">
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address"> 321 Laoreet quis risus nec, Donec eget</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> +1 800 123 1234<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> info@companyname.com</div>
      </div>
    </div>
    <div class="contact_bottom">
      <h3>Contact Form</h3>
      <p>Mauris a vulputate lectus at blandit nisi. Donec eleifend vel felis vitae auctor aenean rhoncus sapien sollicitudin leo interdum.</p>
      <form method="post" action="contact-post.html">
        <div class="contact-to">
          <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
          <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
        </div>
        <div class="text2">
          <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
        </div>
        <div> <a href="#" class="submit">Send Message</a> </div>
      </form>
    </div>
  </div>
</div>
@stop

@section('dashboard')
@stop