// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    })
  })

// NotifyMe
 $("#notifyMe").notifyMe();

// ContactForm
jQuery(function($)  
{
    $("#contact_form").submit(function()
    {
        var email = $("#email").val(); // get email field value
        var name = $("#name").val(); // get name field value
        var msg = $("#msg").val(); // get message field value
        $.ajax(
        {
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                'key': 'xzBI67p9xCprNKSQtCzBJw',
                'message': {
                    'from_email': email,
                    'from_name': name,
                    'headers': {
                        'Reply-To': email
                    },
                    'subject': 'Contacto Nahel',
                    'text': msg,
                    'to': [
                    {
                        'email': 'kavuster@gmail.com',
                        'name': 'Nontacto Nahel',
                        'type': 'to'
                    }]
                }
            }
        })
        .done(function(response) {
            alert('Your message has been sent. Thank you!'); // show success message
            $("#name").val(''); // reset field after successful submission
            $("#email").val(''); // reset field after successful submission
            $("#msg").val(''); // reset field after successful submission
        })
        .fail(function(response) {
            alert('Error sending message.');
        });
        return false; // prevent page refresh
    });
});
