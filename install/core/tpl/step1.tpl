<header class="panel-heading">
	<h4 class="panel-title">{$langs['labels']['Step1 page title']}</h4>
</header>
<div class="panel-body body">
	<div id="msg-box" class="alert hide"></div>
	<form id="nav">
		<div class="row">
			<div class=" col-md-12">
				<div class="row">
					<div class="cell cell-website col-sm-12 form-group">						
						<div class="field field-website">
							<textarea rows="16" class="license-field">{$license}</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cell cell-website col-sm-12 form-group">
			<input class="btn btn-default" type="checkbox" name="license-agree" id="license-agree" value="1" {if $fields['license-agree'].value}checked="checked"{/if}>
			<label class="point-lbl" for="license-agree">&nbsp;&nbsp;&nbsp;{$langs['labels']['I accept the agreement']}</label>
		</div>
	</form>
		
</div>
<footer class="modal-footer">
	<button class="btn btn-default" type="button" id="back">{$langs['labels']['Back']}</button>
	<button class="btn btn-primary" type="button" id="next">{$langs['labels']['Next']}</button>
</footer>
<script>
	{literal}
	$(function(){
	{/literal}
		var langs = {$langsJs};
	{literal}
		var installScript = new InstallScript({action: 'step1', langs: langs});
	})
	{/literal}
</script>
