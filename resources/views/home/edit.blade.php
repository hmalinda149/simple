<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <style>
        body{
            background: rgb(138, 138, 138)
        }
        .div_deg{

            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        h1{
            color: white;
            font-size: 50px!important;
            text-align: center;

        }
        label{
            display: inline-block;
            width: 250px;
            font-size: 18px!important;
            color: white!important;
        }
        input[type='text']{
            width: 300px;
            height: 50px;
        }
        textarea{
            width: 450px;
            height: 80px;
        }
        .input_deg{
            padding: 15px;
        }
    </style>

</head>
<body>
    {{-- nav start --}}
        @include('home.nav')
      {{-- nav end --}}

      {{-- form --}}
      <h1>Edit Personal Details</h1>

      <div class="div_deg">



        <form action="{{url('/update_details',$data1->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="input_deg">
                <label for="">Name</label>
                <input type="text" name="name" required placeholder="Enter Name" value="{{$data1->name}}">
            </div>
            <div class="input_deg">
                <label for="">Address</label>
                <textarea name="address" id="" required placeholder="Enter Address">{{$data1->address}}</textarea>
            </div>
            <div class="input_deg">
                <label for="">Age</label>
                <input type="number" name="age" placeholder="Enter Age" value="{{$data1->age}}">
            </div>
            <div class="input_deg">
                <label for="">Phone</label>
                <input type="text" name="phone" placeholder="Enter Phone" value="{{$data1->phone}}">
            </div>
            <div class="input_deg">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Enter Email" value="{{$data1->email}}">
            </div>
            <div class="input_deg">
                <label for="">Gender</label>
                <select name="gender" id="" >
                    <option value="{{$data1->gender}}" selected>{{$data1->gender}}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="input_deg">
                <label for="">Current  Image</label>
                <img src="/upImg/{{$data1->image}}" width="100" alt="">
            </div>

            <div class="input_deg">
                <label for=""> Change  Image</label>
                <input type="file" name="image" >
            </div>
            <div class="input_deg">
                <input type="submit" value="Update Data" class="btn btn-success">
            </div>

        </form>



    </div>


    {{-- form end --}}


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
