@extends('layouts.app')

@section('header')

<header class="header header-inverse" style="background-color: #c2b2cd;">

  <div class="container text-center">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h1>Edit patient data</h1>
        <p class="fs-20 opacity-70">
          Edit,Delete,Replace.
        </p>
      </div>
    </div>
  </div>

</header>
@stop




@section('content')




      <section class="section pb-0">
        <div class="container">

          

          

        <form class="row gap-y" action="{{ route('edit.store')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="col-12 col-lg-6">

              <div class="row">
                <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="text" name="patient_name" placeholder="Patient Name">
                </div>

                 <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="number" name="age" placeholder="Age">
                </div> 
              </div>

              <div class="row">
                <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="text" name="sex" placeholder="Sex">
                </div>

                <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="text" name="case_title" placeholder="Case Title">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="text" name="blood_group" placeholder="Blood Group">
                </div>

                <div class="form-group col-12 col-md-6">
                  <input class="form-control form-control-lg" type="file" name="image" placeholder="Report">
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control form-control-lg" rows="4" placeholder="Case Description" name="case_des"></textarea>
              </div>

              <button class="btn btn-lg btn-primary" type="submit">Submit</button>

            </div>


          
          </form>

        </div>

        <br><br><br><br>

        <div class="h-350" data-provide="map" data-lat="44.540" data-lng="-78.556" data-marker-lat="44.540" data-marker-lng="-78.556" data-info="&lt;strong&gt;Our office&lt;/strong&gt;&lt;br&gt;3652 Seventh Avenue, Los Angeles, CA" data-style="light"></div>

      </section>



@stop