@if ($errors->any())
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('success'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
    </div>
</div>
@endif

@if (session('error'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        </div>
    </div>
</div>
@endif