@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">if you have trouble with this service, please ask for the help.</p>
                
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label><br>
                        <input type="email" name="email" id="eamil" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit  Enquiry &raquo;</button>
                    </div>

                </form>
            </div>
        </div>

        

        <br><br><br>
    </div>
 
@endsection