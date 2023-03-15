
<div class="container-fluid bg-warning my-5">
<div class="row">
<div class=" col-6">
        <h1 class="text-center my-5 fw-bold">Submit for<span class="text-info"> 4-Wheeler</span></h1>
        <div class="row justify-content-center">
            <div class="col-11 col-lg-5">
                <form action="/project/account.php" method="post">
                    <div class="form-group">
                    <label htmlFor="station_id">Enter Station ID *</label>
                    <input
                    type="number"
                    name="station_id"
                    class="form-control"
                    placeholder="station-id(1-4)"
                    required    
                    />
                    </div>
                    <div class="form-group">
                    <label htmlFor="chargetime">Enter Charge Time *</label>
                    <input
                    type="text"
                    name="chargetime"
                    class="form-control"
                    placeholder="chargetime (range 10-60 mins)"
                    required
                    />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-dark float-end my-4 "
                        style="backgroundColor: black">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class=" col my-3">
    <h1 class="text-center my-5 fw-bold"> Your<span class="text-danger"> BILL</span> <a href ="/project/payment.php" >
      <button class="btn btn-outline-dark fw-bold">CLICK HERE TO PAY</button>
    </a></h1>
    <h6>Pay each bill within 7 days </h6>
    <h6>if paid wait for 24 hrs to get status updated</h6>
        <?php require 'bill_4wheeler.php'?>
    </div>
</div>
