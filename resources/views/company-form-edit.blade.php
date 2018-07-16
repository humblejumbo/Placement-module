<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Placement-module</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/countries.js')}}"></script>
</head>
<body>
    <div class="container" style="width:50%;margin:25px auto">
        <h3 class="text-center" style="text-decoration:underline;margin-bottom:30px">COMPANY FORM</h3>
        {!! Form::open(['action'=> ['Companycontroller@update',$company->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <h4  style="text-decoration:underline;margin-bottom:20px">Company Details</h4>
        <div class="form-group">
             {{ Form::label('CompanyName', 'Company Name')}}
             {{ Form::text('CompanyName', $company->CompanyName, ['class' => 'form-control','placeholder'=>'Company Name','required' => 'required'])}}
        </div>
        
        <div class="form-group float-right">
             {{ Form::label('Sector', 'Sector')}}
             {{ Form::select('Sector',['Agriculture'=>'Agriculture','Chemical'=>'Chemical','Computer'=>'Computer','Construction'=>'Construction','Energy'=>'Energy','Information'=>'Information','Manufacture'=>'Manufacture','Telecommunications'=>'Telecommunications'],$company->Sector,['placeholder'=>'Select a Sector','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('IncorporationStatus', 'Incorporation Status')}}
             {{ Form::select('IncorporationStatus', ['Business'=>'Business','Controlled'=>'Controlled','Cooperative'=>'Cooperative','Foreign'=>'Foreign','Non-Profit'=>'Non-Profit','Private'=>'Private','Professional'=>'Professional','Public'=>'Public'],$company->IncorporationStatus,['placeholder'=>'Select a Status','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Scale', 'Scale')}}
             {{ Form::select('Scale', ['Large'=>'Large','Medium'=>'Medium','Small'=>'Small'],$company->Scale,['placeholder'=>'Select a Scale','required' => 'required'])}}
        </div>
        
       

        <h4  style="text-decoration:underline;margin-bottom:20px">Contact Details</h4>

        <div class="form-group">
            {{ Form::label('Address', 'Address')}}
            {{ Form::textarea('Address',$company->Address, ['class' => 'form-control','placeholder'=>'Address','rows'=>'2','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Pin', 'Pin')}}
             {{ Form::text('Pin',$company->Pin, ['class' => 'form-control','placeholder'=>'Pin','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Country', 'Country')}}
             {{ Form::select('Country',[],$company->Country,['id'=>'country','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('State', 'State')}}
             {{ Form::select('State',[],$company->State,['id'=>'state','placeholder'=>'Select State','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('District', 'District')}}
             {{ Form::text('District',$company->District, ['class' => 'form-control','placeholder'=>'District','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Email', 'E-mail')}}
             {{ Form::email('Email',$company->Email, ['class' => 'form-control','placeholder'=>'E-mail','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Pno', 'Phone Number')}}
             {{ Form::text('Pno', $company->Pno, ['class' => 'form-control','placeholder'=>'Phone Number with ISD/STD code','required' => 'required','minlength'=>8])}}
        </div>
         <div class="form-group">
             {{ Form::label('Fno', 'Fax Number')}}
             {{ Form::text('Fno',$company->Fno, ['class' => 'form-control','placeholder'=>'Fax Number'])}}
        </div>
          <div class="form-group">
             {{ Form::label('Website', 'Web Site')}}
             {{ Form::text('Website',$company->Website, ['class' => 'form-control','placeholder'=>'Web Site'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        <div class="form-group">
            {{ Form::submit('Update', ['class' => 'btn btn-success','value'=>'Submit'])}}
        </div>

       
        {!! Form::close() !!}
    </div>
    
    <script language="javascript">
        populateCountries("country", "state");
    </script>
</body>
</html>