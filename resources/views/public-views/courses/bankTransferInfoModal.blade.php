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
        
        <h4>Please see our bank details below if you wish to pay through bank transfer:</h4>

        <div class="card">
          <div class="card-header">
            <h4 style="color: #FF5733; font-weight: bold;">USD payments:</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title"><span style="color: #FF5733">Correspondent bank:</span></h5>
            <h5 class="card-title">Deutsche Bank Trust Company Americas</h5>
            <h5 class="card-title">New York NY</h5>
            <h5 class="card-title"><span style="color: #FF5733">SWIFT Code:</span> BKTRUS33</h5>
            <h5 class="card-title">ABA 021001033 </h5>
            <h5 class="card-title"><span style="color: #FF5733">To:</span><br> Stanbic IBTC Bank, Lagos Nigeria</h5>
            <h5 class="card-title"><span style="color: #FF5733">Account no:</span> 04433866</h5>
            <h5 class="card-title"><span style="color: #FF5733">SWIFT Code:</span> SBICNGLX</h5>
            <h5 class="card-title"><span style="color: #FF5733">For final credit to:</span></h5>
            <h5 class="card-title"><span style="color: #FF5733">Account Name:</span> Gosgem Concepts</h5>
            <h5 class="card-title"><span style="color: #FF5733">Account No: </span> 0027931067</h5>
            <h5 class="card-title"><span style="color: #FF5733">Bank:</span> Stanbic IBTC</h5>      
          </div>
        </div>

      </div>

  </div>
</div>