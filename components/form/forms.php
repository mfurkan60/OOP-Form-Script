<form class="needs-validation mt-4 p-4" novalidate>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationCustom01"> Full Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Your Name" required>
            <div class="invalid-feedback">
                Please enter your full name
            </div>


        </div>

    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom01">Email</label>
            <input type="email" class="form-control" id="validationCustom01" placeholder="Your Email" required>
            <div class="invalid-feedback">
                Please enter email address
            </div>

        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom02">Phone Number</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Phone Number" required>
            <div class="invalid-feedback">
                Please enter phone number
            </div>

        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-4">

            <div class="form-group">
                <label>Gender </label>
                <select class="form-control">
                    <option>Male </option>
                    <option>Female </option>



                </select>
            </div>

        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom05"> Date</label>
            <input type="date" class="form-control" placeholder="Select Date" id="" required>
            <div class="invalid-feedback">
                Please select date
            </div>
        </div>
    </div>

    <hr>

    <h5 class="mt-3">Witness</h5>
    <div class="form-row">
        <div class="col-md-12 ">

            <div class="form-group">


                <label for="validationCustom01"> Full Name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Your Name" required>
                <div class="invalid-feedback">
                    Please enter witness full name
                </div>



            </div>

        </div>

    </div>








    <div class="form-row">
        <div class="col-md-12 mb-4">

            <div class="form-group">
                <label for="">Witness Comments</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        </div>

    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to <a href="" data-toggle="modal" data-target="#terms">terms</a> and
                <a href="" data-toggle="modal" data-target="#conditions">conditions</a>
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <button class="btn btn-primary btn-block " type="submit">Submit Form</button>
    </div>
</form>