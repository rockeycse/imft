<h1 class="page-header">Countr List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('countr/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('countr_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('countr/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('countr/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('countr/list?field=name&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('countr_field')=='name'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('countr/list?field=CountrCode&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                Countr Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('countr_field')=='CountrCode'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('countr/list?field=testfield&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                Countr Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('countr_field')=='testfield'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('countr/list?field=unitprice&sort={{Session::get("countr_sort")=="asc"?"desc":"asc"}}')">
                Unitprice
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('countr_field')=='unitprice'?(Session::get('countr_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($countrs as $key=>$countr)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$countr->name}}</td>
            <td>{{$countr->CountrCode}}</td>
            <td>{{$countr->testfield}}</td>
            <td align="right">$ {{$countr->unitprice}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('countr/update/{{$countr->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('countr/delete/{{$countr->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$countrs->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$countrs->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>