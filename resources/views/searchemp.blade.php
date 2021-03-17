@extends("theme")

@section("content")
<center>
    <div class="container">
    <h3> SEARCH EMPLOYEE</h3><br><br>
        <div class="row">
            <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <table class="table table-borderless">
            <tr>
                <td>Employee Code</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success">Search</button></td>
            </tr>
            </table>
            </div>
        </div>
    </div></center>
    @endsection