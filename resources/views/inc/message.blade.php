@if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close ml-2" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger">
        <a  href="#" class="close ml-2" data-dismiss="alert" aria-label="close">&times;</a> {{ session('error') }}
        </div>
    @endif