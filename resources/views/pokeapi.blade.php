@extends('layouts.main')

@section('content')

<h1>Poke Api Consume</h1>

 <form action="" method="get">
    <div class="row">
        <div class="col-6">        
            <select class="form-select" id="form-select-sm" data-placeholder="Choose one thing">
                <option></option>
            @foreach($body as $data)
                    <option value="{{ $data['name'] }}"> {{ $data['name'] }} </option>
            @endforeach
            </select>
        </div>
        <div class="col-6">
            <h1 id="tampilkan"></h1>
        </div>
    </div>
    
 </form>

@endsection

@push('head-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@push('body-script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $("#form-select-sm").select2({
            theme: "bootstrap-5",
            containerCssClass: "select2--small", // For Select2 v4.0
            selectionCssClass: "select2--small", // For Select2 v4.1
            dropdownCssClass: "select2--small",
        });
    });
    
</script>


<!-- Tampilkan data ketika terpilih -->
<script>
    $(document).ready(function(){
        $('#form-select-sm').change(function(){
            var selectedValue = $(this).val();
            $('#tampilkan').text(selectedValue);
        });
    });
</script>
@endpush
