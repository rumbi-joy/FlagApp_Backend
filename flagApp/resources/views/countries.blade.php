@include('includes.header')
@include('includes.sidebar')

        
            Page Wrapper 
            <div class="page-wrapper">
                <div class="content container-fluid">
                  

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-center">
                                        <div class="col">
                                            <h5 class="card-title">Countries </h5>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">

                                    </div>

                                    <div class="table-responsive">

                                        <table class="table table-stripped table-hover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Country</th>
                                                    <th>Flag</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($countries as $country)
                                            
                                                <tr>
                                                    <td>{{$country['name']}}</td>
                                                    <td>{{$country['flag']}}</td>
                                                </tr>
                                                @endforeach
                                                 </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
             /Page Wrapper 

     @include('includes.footer')