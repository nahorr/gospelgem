            
            <div class="">
              <form class="form-group">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                 <button type="button" class="btn btn-danger" name="pay_now" id="pay-now" title="Pay now"  onclick="payWithPaystack()" style="color: white;"><strong>Pay With Paystack</strong></button>
              </form>
            </div>
              <script>
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              function payWithPaystack(data){
                var handler = PaystackPop.setup({
                  key: "{{env('PAYSTACK_PUBLIC_ KEY')}}",
                  email: '{{ Auth::user()->email }}',
                  currency: '{{ $course->currency }}',
                  amount: <?php echo $course->price; ?>,
                  ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                  metadata: {
                     custom_fields: [
                        {
                            display_name: "Name",
                            variable_name: "name",
                            value: "{{ Auth::user()->name }}"
                        }
                     ]
                  },
                  callback: function(response){
                    saveOrder(response);
                    alert('success. transaction ref is ' + response.reference);
                    var tranx_ref = response.response;
                  },
                  
                  onClose: function(){
                      alert('window closed');
                      location.reload();
                  },
                });
                handler.openIframe();
              }
              
              
              function saveOrder(response){
                
                // Send the data to save using post
                //var posting = $.post( '/paystack', orderObj );
                var posting = $.ajax({
                   type:'POST',
                   url:"{{ url('/courses/registrations/'.$course->id) }}",
                   data: { trans_ref : response.reference },
                });

                window.location.href = "{{url('/courses/registrations')}}";
              }
            </script>