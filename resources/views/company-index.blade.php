<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Placement-module</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        table,td,th{
            border: 2px ridge black;
        }
    </style>
</head>
<body>
    @if(count($companies)>0)
        <table>
            <tr>
                <th>#id</th>
                <th>Company Name</th>
                <th>Incorporation Status</th>
                <th>Sector</th>
                <th>Scale</th>
                <th>Address</th>
                <th>Country</th>
                <th>State</th>
                <th>District</th>
                <th>PIN</th>
                <th>Phone Number</th>
                <th>Fax Number</th>
                <th>E-mail</th>
                <th>Website</th>
            </tr>
            @foreach($companies as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->CompanyName}}</td>
                    <td>{{$company->IncorporationStatus}}</td>
                    <td>{{$company->Sector}}</td>
                    <td>{{$company->Scale}}</td>
                    <td>{{$company->Address}}</td>
                    <td>{{$company->Country}}</td>
                    <td>{{$company->State}}</td>
                    <td>{{$company->District}}</td>
                    <td>{{$company->Pin}}</td>
                    <td>{{$company->Pno}}</td>
                    <td>{{$company->Fno}}</td>
                    <td>{{$company->Email}}</td>
                    <td>{{$company->Website}}</td>
                </tr>
            @endforeach
        </table>
    @else
        <h3>No Companies Registered.</h3>
    @endif
</body>
</html>