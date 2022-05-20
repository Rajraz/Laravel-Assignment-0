<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
          <!-- partial navbar -->
        @include('admin.navbar')
      <!-- partial body -->
      <div class="container-fluid page-body-wrapper">

        <div style="padding-bottom:30px;" class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"> x </button>

            {{session()->get('message')}}
            </div>

            @endif
            <table style="margin-bottom: 20px;">
                <tr style="background-color:white; color:blue;">
                <td style="padding: 20px;">S.no</td>
                <td style="padding: 20px;">Firstname</td>
                <td style="padding: 20px;">Lastname</td>
                <td style="padding: 20px;">Company</td>
                <td style="padding: 20px;">Email</td>
                <td style="padding: 20px;">Phone</td>
                <td style="padding: 20px;">Update</td>
                <td style="padding: 20px;">Delete</td>

                </tr>


                @foreach ($data as $employee )


                <tr align="center" style="background-color:black; padding:20px;">
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->firstname}}</td>
                    <td>{{$employee->lastname}}</td>
                    <td>{{$employee->company}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updatevie',$employee->id)}}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deleteemployee',$employee->id)}}">Delete</a>
                    </td>

                    </tr>

                    @endforeach


            </table>

            {{$data->links()}}

        </div>


      </div>
        <!-- partial script-->
        @include('admin.script')



  </body>
</html>

