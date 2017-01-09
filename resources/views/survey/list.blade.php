<h1 class="page-header">Survey List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('survey/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('survey_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('survey/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('survey/list')}}?ok=1&search='+$('#search').val())"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="50px" style="text-align: center">No</th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=ZoneId&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                ZoneId
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='ZoneId'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=AreaId&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                AreaId
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='AreaId'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('survey/list?field=BranchId&sort={{Session::get("survey_sort")=="asc"?"desc":"asc"}}')">
                BranchId
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('survey_field')=='BranchId'?(Session::get('survey_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($surveys as $key=>$survey)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$survey->ZoneId}}</td>
            <td>{{$survey->AreaId}}</td>
            <td>{{$survey->BranchId}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('survey/update/{{$survey->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('survey/delete/{{$survey->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$surveys->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$surveys->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>