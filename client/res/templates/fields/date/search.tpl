
<select class="form-control search-type input-sm" name="{{name}}-type">
	{{options searchParams.typeOptions searchParams.type field='dateSearchRanges'}}
</select>
<div class="input-group primary">
	<input class="main-element form-control input-sm" type="text" name="{{name}}" value="{{searchParams.dateValue}}" autocomplete="off">
	<span class="input-group-btn">        
        <button type="button" class="btn btn-default btn-sm date-picker-btn" tabindex="-1"><i class="glyphicon glyphicon-calendar"></i></button>    
	</span>
</div>
<div class="input-group{{#ifNotEqual searchParams.type 'between'}} hidden{{/ifNotEqual}} additional">
	<input class="main-element form-control input-sm" type="text" name="{{name}}-additional" value="{{searchParams.dateValueTo}}" autocomplete="off">
	<span class="input-group-btn">        
        <button type="button" class="btn btn-default btn-sm date-picker-btn" tabindex="-1"><i class="glyphicon glyphicon-calendar"></i></button>    
	</span>
</div>
