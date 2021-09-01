@extends('master')

@section('seccion')
<main class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" alt="" width="72" height="57">
        <h2>Contact form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5">
        <div class="col-md-12">
            <h4 class="mb-3">Contact me for more interesting posting</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Topic of you interest:</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your topic of preference.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="state" class="form-label">Where are you from?</label>
                        <input type="text" class="form-control" id="country" placeholder="Mongolia" required>
                        <div class="invalid-feedback">
                            Please enter your Country.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="btn btn-primary btn-lg" type="submit">Send</button>
            </form>
        </div>
    </div>

</main>
@endsection