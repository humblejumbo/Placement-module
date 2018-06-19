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
        {!! Form::open() !!}
        <h4  style="text-decoration:underline;margin-bottom:20px">Company Details</h4>
        <div class="form-group">
             {{ Form::label('CompanyName', 'Company Name')}}
             {{ Form::text('CompanyName', '', ['class' => 'form-control','placeholder'=>'Company Name','required' => 'required'])}}
        </div>
        
        <div class="form-group float-right">
             {{ Form::label('Sector', 'Sector')}}
             {{ Form::select('Sector', ['Agriculture','Chemical','Computer','Construction','Energy','Information','Manufacture','Telecommunications'],null,['placeholder'=>'Select a Sector','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('IncorporationStatus', 'Incorporation Status')}}
             {{ Form::select('Incorporation Status', ['Business','Controlled','Cooperative','Foreign','Non-Profit','Private','Professional','Public'],null,['placeholder'=>'Select a Status','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Scale', 'Scale')}}
             {{ Form::select('Scale', ['Large','Medium','Small'],null,['placeholder'=>'Select a Scale','required' => 'required'])}}
        </div>
        
       

        <h4  style="text-decoration:underline;margin-bottom:20px">Contact Details</h4>

        <div class="form-group">
            {{ Form::label('Address', 'Address')}}
            {{ Form::textarea('Address', '', ['class' => 'form-control','placeholder'=>'Address','rows'=>'2','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Pin', 'Pin')}}
             {{ Form::text('Pin', '', ['class' => 'form-control','placeholder'=>'Pin','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Country', 'Country')}}
             {{ Form::select('Country',[],null,['id'=>'country','placeholder'=>'Select a Country','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('State', 'State')}}
             {{ Form::select('State',[],null,['id'=>'state','placeholder'=>'Select a State','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('District', 'District')}}
             {{ Form::text('District', '', ['class' => 'form-control','placeholder'=>'District','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Email', 'E-mail')}}
             {{ Form::email('Email', '', ['class' => 'form-control','placeholder'=>'E-mail','required' => 'required'])}}
        </div>
        <div class="form-group">
             {{ Form::label('Pno', 'Phone Number')}}
             {{ Form::text('Pno', '', ['class' => 'form-control','placeholder'=>'Phone Number with ISD code','required' => 'required','minlength'=>8])}}
        </div>
         <div class="form-group">
             {{ Form::label('Fno', 'Fax Number')}}
             {{ Form::text('Fno', '', ['class' => 'form-control','placeholder'=>'Fax Number'])}}
        </div>
          <div class="form-group">
             {{ Form::label('WebSite', 'Web Site')}}
             {{ Form::text('WebSite', '', ['class' => 'form-control','placeholder'=>'Web Site'])}}
        </div>
        
        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary','value'=>'Submit'])}}
        </div>

       
        {!! Form::close() !!}
    </div>
    
    <script language="javascript">
        populateCountries("country", "state");
    </script>
</body>
</html>