<!-- Modal -->
<div id="bankTransferInfoModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FF5733;">
        <h4 class="modal-title pull-left" style="color: #FFF;">
          Course: {{$course->course_name}}<br>
          Cost: <span style="color: #FEF9E7; font-weight: bold;font-style: italic;">{{$course->currency}} {{ $course->price/100 }}</span>
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
        <h4>FUNDS TRANSFER INSTRUCTION:</h4>

        <div class="card">
          <div class="card-header">
            <h4 style="color: #FF5733; font-weight: bold;">FOR TRANSFER OF USD  INTO DOMICILLIARY ACCOUNT THROUGH CITIBANK NEW YORK:</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title"><span style="color: #FF5733">CORRESPONDENT BANK:</span> CITIBANK, NEW YORK</h5>
            <h5 class="card-title"><span style="color: #FF5733">SWIFT CODE:</span> CITIUS33</h5>
            <h5 class="card-title"><span style="color: #FF5733">ABA NO:</span> 021000089</h5><br>
            <h5 class="card-title"><span style="color: #FF5733">FOR CREDIT OF:</span> GUARANTY TRUST BANK PLC, LAGOS NIGERIA</h5>
            <h5 class="card-title"><span style="color: #FF5733">SWIFT CODE:</span> GTBINGLA</h5>
            <h5 class="card-title"><span style="color: #FF5733">ACCOUNT NUMBER:</span> 36129295</h5><br>
            <h5 class="card-title"><span style="color: #FF5733">FOR FINAL CREDIT OF:</span> (Beneficiary's Name)</h5>
            <h5 class="card-title"><span style="color: #FF5733">BENEFICIARY'S details:</span></h5>
            <h5 class="card-title"><span style="color: #FF5733">Account Name:</span> Gosgem Concepts</h5>
            <h5 class="card-title"><span style="color: #FF5733">Account Number: </span> 0451549850</h5>
            <h5 class="card-title"><span style="color: #FF5733">Bank:</span> Guaranty Trust Bank</h5> 
            <br>    
            <h5 class="card-title"><span style="color: #FF5733">ANY OTHER DETAIL:</span> (e.g. Sender's Name, Reference e.t.c)</h5> 
          </div>
        </div>

      </div>

  </div>
</div>