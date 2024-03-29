<h4>{{translate 'Step 2' scope='Import'}}</h4>

	<div class="panel panel-default">
		<div class="panel-heading"><h5 class="panel-title">{{translate 'Field Mapping' scope='Import'}}</h5></div>
		<div class="panel-body">
			<div id="mapping-container">			
			</div>
		</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><h5 class="panel-title">{{translate 'Default Values' scope='Import'}}</h5></div>
		<div class="panel-body">
			<div class="button-container">
				<div class="btn-group">
					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						{{translate 'Add Field'}}
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-left">
					{{#each fieldList}}
						<li><a href="javascript:" data-action="addField" data-name="{{./this}}">{{translate this scope=../scope category='fields'}}</a></li>
					{{/each}}
					</ul>
				</div>
			</div>
			<div id="default-values-container">			
			</div>
		</div>
	</div>
	
	<div style="padding-bottom: 10px;" class="clearfix">
		<button class="btn btn-default pull-left" data-action="back">{{translate 'Back'}}</button>
		<button class="btn btn-danger pull-right" data-action="next">{{translate 'Run Import'}}</button>
	</div>
