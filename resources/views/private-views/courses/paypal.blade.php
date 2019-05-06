<!-- PayPal Smart Button-->
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}"></script>

<div id="paypal-button-container">
	
</div>

<script>

  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '{{ $course->price/100 }}'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        // Call your server to save the transaction
        return fetch("{{ url('/courses/registrations/'.$course->id) }}", {
          headers: {
			 "Content-Type": "application/json",
			 "Accept": "application/json, text-plain, */*",
			 "X-Requested-With": "XMLHttpRequest",
			 "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
			},
          method: 'post',
          credentials: "same-origin",
          body: JSON.stringify({
            trans_ref: data.orderID
          })
        })
        .then( (data) => { 
		   //do something awesome that makes the world a better place
		   window.location.href = "{{url('/courses/registrations')}}";
		});
        
      });
    }
  }).render('#paypal-button-container');
</script>
<!-- End PayPal Smart Button-->