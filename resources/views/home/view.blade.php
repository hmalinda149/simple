<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;

        }
        .table_deg{
            border: 2px solid greenyellow;
        }
        th{
            background-color: rgb(94, 95, 95);
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }
        td{
            border: 1px solid skyblue;
            text-align: center;
            color: rgb(24, 24, 24);
        }


        .img_edit{

            height: 100px;
             width: 100px;

        }
        h1{
            color: white;
            font-size: 35px!important;

        }


    </style>

</head>
<body>
    {{-- nav start --}}
    @include('home.nav')
      {{-- nav end --}}

      {{-- form --}}

      <div class="div_deg">
        <table class="table_deg">
            <tr>
                <th>name</th>
                <th>address</th>
                <th>age</th>
                <th>phone</th>
                <th>email</th>
                <th>gender</th>
                <th>image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($data as $data)

            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->gender}}</td>
                <td>
                    <img src="/upImg/{{$data->image}}" alt="" class="img_edit" >
                </td>
                <td>
                    <a href="{{url('/edit_data',$data->id)}}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <a href="{{url('/delete',$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this ?')">
                        Delete
                    </a>
                </td>

            </tr>

            @endforeach


        </table>

    </div>

{{-- form end --}}


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
