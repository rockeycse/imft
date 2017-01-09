<h1 class="page-header">Jamindar List
    <div class="pull-right">
        <a href="javascript:ajaxLoad('jamindar/create')" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus-sign"></i> New</a>
    </div>
</h1>
<div class="col-sm-7 form-group">
    <div class="input-group">
        <input class="form-control" id="search" value="{{ Session::get('jamindar_search') }}"
               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('jamindar/list')}}?ok=1&search='+this.value)"
               placeholder="Search..."
               type="text">

        <div class="input-group-btn">
            <button type="button" class="btn btn-default"
                    onclick="ajaxLoad('{{url('jamindar/list')}}?ok=1&search='+$('#search').val())"><i
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
            <a href="javascript:ajaxLoad('jamindar/list?field=name&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
                Name
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='name'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=JamindarCode&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
                Jamindar Code
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='JamindarCode'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th>
            <a href="javascript:ajaxLoad('jamindar/list?field=unitprice&sort={{Session::get("jamindar_sort")=="asc"?"desc":"asc"}}')">
                Unitprice
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('jamindar_field')=='unitprice'?(Session::get('jamindar_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th width="140px">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($jamindars as $key=>$jamindar)
        <tr>
            <td align="center">{{$i++}}</td>
            <td>{{$jamindar->name}}</td>
            <td>{{$jamindar->JamindarCode}}</td>
            <td align="right">$ {{$jamindar->unitprice}}</td>
            <td style="text-align: center">
                <a class="btn btn-primary btn-xs" title="Edit"
                   href="javascript:ajaxLoad('jamindar/update/{{$jamindar->id}}')">
                    <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('jamindar/delete/{{$jamindar->id}}')">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="pull-right">{!! str_replace('/?','?',$jamindars->render()) !!}</div>
<div class="row">
    <i class="col-sm-12">
        Total: {{$jamindars->total()}} records
    </i>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>