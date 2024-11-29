@extends('partials.app') <!-- Extend the main layout -->

@section('content') <!-- Define the content section to be injected into the layout -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <!-- Example of Dashboard Content -->
    <div class="row">

    

    </div>
    <!-- End of Row -->

    <!-- Additional Content or Statistics can be added here -->
    <div class="row">
        <!-- Example: Recent Activity -->
        <div class="col-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Activity</h6>
                </div>
                <div class="card-body">
                    <p>This could be a summary of recent activities, logs, or other important information.</p>
                    <!-- You could include another table or chart component here -->
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
