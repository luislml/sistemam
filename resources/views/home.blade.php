@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Perfil de Usuario</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          
          <div>
           
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>Nicole Pearson</b></h2>
                  <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="img/user.svg" width="50%"alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
