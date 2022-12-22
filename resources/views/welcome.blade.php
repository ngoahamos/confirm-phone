
<!doctype html>
<html lang="en">
<head>
    <title>Confirm Phone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/style.css')}}" >
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Confirm Phone</h2>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <h3 class="text-center mb-4">Enter phone number to verify</h3>
                    <form action="{{route('confirm')}}" method="post" class="login-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" name="phone" placeholder="Phone Number" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@if (session()->has('error'))

    <script>

        document.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire(
                'Failed',
                'Phone number does not match our record',
                'error'
            )
        });

    </script>


@endif
@if (session()->has('success'))

    <script>

        document.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire(
                'Success!',
                'Phone number confirmed.',
                'success'
            )
        });

    </script>


@endif
</body>
</html>
