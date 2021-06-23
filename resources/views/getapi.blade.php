
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
</head>

@extends('layouts.app')
@section('content')

<h1>Data Job List</h1>


<div class="row">
                                                 <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                   <!--  <h5 class="mt-4 mb-4"> Data Job List</h2> -->
                                                            <table id="data_job" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    @foreach ($data as $item)
                                                                    
                                                                    <tr>
                                                                            
                                                                            <td><p class="text-primary">{{ $item['title'] }}</p>
                                                                            <br>
                                                                            {{ $item['company'] }}	- {{ $item['type']}}
                                                                            </td>
                                                                            <!-- <td>{{ $item['company'] }}</td> -->
                                                                            <!-- <td>{{ $item['type']}}</td> -->
                                                                            <td>{{ $item['location']}}
                                                                            	<br>
                                                                            	{{ $item['created_at']}}
                                                                            </td>
                                                                            <!-- <td>{{ $item['created_at']}}</td> -->
                                                                            <td>
                                                                                <a href="/getdetail/{{$item['id'] }}" class="btn btn-primary" ><i class="fa fa-edit"></i> detail </a>
                                                                                
                                                                            </td>
                                                                            
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <script>
                                                            $(document).ready(function() {

                                                            $('#data_job').DataTable();

                                                             } );
                                                        </script>


@endsection

</html>