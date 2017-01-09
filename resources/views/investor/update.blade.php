<h2 class="page-header">Edit Investor</h2>
{!! Form::model($investor,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("investor._form")
{!! Form::close() !!}