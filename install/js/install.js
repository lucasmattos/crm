/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014  Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/
var InstallScript = function(opt) {
	this.reChecking = false;

	if (typeof(opt.action) !== 'undefined') {
		var action = opt.action;
		this.action = action;
		this[action]();
	}

	if (typeof(opt.langs) !== 'undefined') {
		this.langs = opt.langs;
	}

	if (typeof(opt.modRewriteUrl) !== 'undefined') {
		this.modRewriteUrl = opt.modRewriteUrl;
	}

	if (typeof(opt.serverType) !== 'undefined') {
		this.serverType = opt.serverType;
	}

	if (typeof(opt.OS) !== 'undefined') {
		this.OS = opt.OS;
	}

	this.connSett = {};
	this.userSett = {};
	this.systemSettings = {};
	this.emailSettings = {};
	this.checkActions = [
		{
			'action': 'checkModRewrite',
			'break': true,
		},
		{
			'action': 'checkPermission',
			'break': true,
		},
		{
			'action': 'applySett',
			'break': true,
		},
		{
			'action': 'buildDatabse',
			'break': true,
		},
		{
			'action': 'createUser',
			'break': true,
		},

	];
	this.checkIndex = 0;
	this.checkError = false;
}

InstallScript.prototype.main = function() {
	var self = this;
	var nextAction = 'step1';

	$("#start").click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(nextAction);
	})

	$('[name="user-lang"]').change(function(){
		self.goTo(self.action);
	})
}

InstallScript.prototype.step1 = function() {
	var self = this;
	var backAction = 'main';
	var nextAction = 'step2';

	$('#back').click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(backAction);
	})

	$("#next").click(function(){
		$(this).attr('disabled', 'disabled');
		var licenseAgree = $('#license-agree');

		if (licenseAgree.length > 0 && !licenseAgree.is(':checked')) {
			$(this).removeAttr('disabled');
			self.showMsg({msg: self.getLang('You must agree to the license agreement', 'messages'), error: true});
		}
		else {
			self.goTo(nextAction);
		}
	})
}

InstallScript.prototype.step2 = function() {
	var self = this;
	var backAction = 'step1';
	var nextAction = 'step3';

	$('#back').click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(backAction);
	})

	$('#test-connection, #next').click(function(){
		$(this).attr('disabled', 'disabled');
		self.setConnSett();
		if (!self.validate()) {
			$(this).removeAttr('disabled');
			return;
		}
		self.showLoading();

		var btn = $(this);
		self.checkSett({
			success: function(data) {
				if (data.success) {
					if (btn.attr('id') == 'next') self.goTo(nextAction);
					else self.showMsg({msg: self.getLang('All Settings correct', 'messages')});
				}
				else {
					$('#next').removeAttr('disabled');
				}
				$('#test-connection').removeAttr('disabled');
				self.hideLoading();
			}, // success END
			error: function() {
				$('#next').removeAttr('disabled');
				$('#test-connection').removeAttr('disabled');
				self.hideLoading();
			}, // error END

		}) // checkSett END

	})
}

InstallScript.prototype.step3 = function() {
	var self = this;
	var backAction = 'step2';
	var nextAction = 'step4';

	$('#back').click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(backAction);
	})

	$("#next").click(function(){
		$(this).attr('disabled', 'disabled');
		self.setUserSett();
		if (!self.validate()) {
			$(this).removeAttr('disabled');
			return;
		}

		self.checkPass({
			success: function(){
				self.showLoading();
				self.actionsChecking();
			},
			error: function(msg) {
				$("#next").removeAttr('disabled');
				self.showMsg({msg: self.getLang(msg, 'messages'), error: true});
			}
		});
	})
}

InstallScript.prototype.step4 = function() {
	var self = this;
	var backAction = 'step3';
	var nextAction = 'step5';

	$('#back').click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(backAction);
	})

	$("#next").click(function(){
		$(this).attr('disabled', 'disabled');
		self.setSystemSett();
		if (!self.validate()) {
			$(this).removeAttr('disabled');
			return;
		}
		var data = self.systemSettings;

		data.action = 'setPreferences';
		$.ajax({
			url: "index.php",
			type: "POST",
			data: data,
			dataType: 'json',
		})
		.done(function(ajaxData){
			if (typeof(ajaxData) != 'undefined' && ajaxData.success) {
				self.goTo(nextAction);
			}
		})
		.fail(function(ajaxData){

		})

	})
}

InstallScript.prototype.step5 = function() {
	var self = this;
	var backAction = 'step4';
	var nextAction = 'finish';

	$('#back').click(function(){
		$(this).attr('disabled', 'disabled');
		self.goTo(backAction);
	})

	$("#next").click(function(){
		$(this).attr('disabled', 'disabled');
		self.setEmailSett();
		if (!self.validate()) {
			$(this).removeAttr('disabled');
			return;
		}
		var data = self.emailSettings;

		data.action = 'setEmailSett';
		$.ajax({
			url: "index.php",
			type: "POST",
			data: data,
			dataType: 'json',
		})
		.done(function(ajaxData){
			if (typeof(ajaxData) != 'undefined' && ajaxData.success) {
				self.goTo(nextAction);
			}
		})
		.fail(function(ajaxData){

		})

	})

	$('.field-smtpAuth').find('input[type="checkbox"]').change( function(e){
		if ($(this).is(':checked')) {
			$('.cell-smtpPassword').removeClass('hide');
			$('.cell-smtpUsername').removeClass('hide');
		}
		else {
			$('.cell-smtpPassword').addClass('hide');
			$('.cell-smtpUsername').addClass('hide');
			$('.cell-smtpUsername').find('input').val('');
			$('.cell-smtpPassword').find('input').val('');
		}
	});
	$('[name="smtpSecurity"]').change( function(e){

		var smtpPorts = {
			"": "25",
			"SSL": "465",
			"TLS": "587"
		}

		var portVal = $(this).val();

		$('[name="smtpPort"]').val(smtpPorts[portVal]);
	});
}

InstallScript.prototype.errors = function() {
	var self = this;

	this.reChecking = true;
	var nextAction = '';
	$("#re-check").click(function(){
		$(this).attr('disabled', 'disabled');
		self.showLoading();
		self.actionsChecking();
	})
}

InstallScript.prototype.finish = function() {
	var self = this;

	var nextAction = '';
	$("#start").click(function(){
		self.goToEspo();
	})
}

InstallScript.prototype.setConnSett = function() {
	this.connSett.dbName = $('[name="db-name"]').val();
	this.connSett.hostName = $('[name="host-name"]').val();
	this.connSett.dbUserName = $('[name="db-user-name"]').val();
	this.connSett.dbUserPass = $('[name="db-user-password"]').val();
	this.connSett.dbDriver = $('[name="db-driver"]').val();
}

InstallScript.prototype.setUserSett = function() {
	this.userSett.name = $('[name="user-name"]').val();
	this.userSett.pass = $('[name="user-pass"]').val();
	this.userSett.confPass = $('[name="user-confirm-pass"]').val();
}

InstallScript.prototype.setSystemSett = function() {
	this.systemSettings.dateFormat = $('[name="dateFormat"]').val();
	this.systemSettings.timeFormat = $('[name="timeFormat"]').val();
	this.systemSettings.timeZone = $('[name="timeZone"]').val();
	this.systemSettings.weekStart = $('[name="weekStart"]').val();
	this.systemSettings.defaultCurrency = $('[name="defaultCurrency"]').val();
	this.systemSettings.thousandSeparator = $('[name="thousandSeparator"]').val();
	this.systemSettings.decimalMark = $('[name="decimalMark"]').val();
	this.systemSettings.language = $('[name="language"]').val();
}

InstallScript.prototype.setEmailSett = function() {
	this.emailSettings.smtpServer = $('[name="smtpServer"]').val();
	this.emailSettings.smtpPort = $('[name="smtpPort"]').val();
	this.emailSettings.smtpAuth = $('[name="smtpAuth"]').is(':checked');
	this.emailSettings.smtpSecurity = $('[name="smtpSecurity"]').val();
	this.emailSettings.smtpUsername = $('[name="smtpUsername"]').val();
	this.emailSettings.smtpPassword = $('[name="smtpPassword"]').val();
	this.emailSettings.outboundEmailFromName = $('[name="outboundEmailFromName"]').val();
	this.emailSettings.outboundEmailFromAddress = $('[name="outboundEmailFromAddress"]').val();
	this.emailSettings.outboundEmailIsShared = $('[name="outboundEmailIsShared"]').is(':checked');
}

InstallScript.prototype.checkSett = function(opt) {
	var self = this;
	this.hideMsg();

	var data = this.connSett;
	data.action = 'settingsTest';
	$.ajax({
		url: "index.php",
		data: data,
		type: "POST",
		dataType: 'json',
	})
	.done(function(data){
		if (typeof(data.success) !== 'undefined' && data.success) {
			data.success = true;
		}
		else {
			var msg = '';
			var rowDelim = '<br>';
			if (typeof(data.errors)) {
				var errors = data.errors;
				if (typeof(errors.phpVersion) !== 'undefined') {
					msg += self.getLang('phpVersion', 'messages').replace('{minVersion}', errors.phpVersion) + rowDelim;
				}

				if (typeof(errors.exts) !== 'undefined') {
					var exts = errors.exts;
					var len = exts.length;
					for (var index = 0; index < len; index++) {
						var temp = self.getLang('The PHP extension was not found...', 'messages');
						temp = temp.replace('{extName}', exts[index]);
						msg += temp+rowDelim;
					}
				}

				if (typeof(errors.modRewrite) !== 'undefined') {
					msg += errors.modRewrite+rowDelim;
				}

				if (typeof(errors.dbConnect) !== 'undefined') {
					if (typeof(errors.dbConnect.errorCode) !== 'undefined') {
						var temp = self.getLang(errors.dbConnect.errorCode, 'messages');
						if (temp == errors.dbConnect.errorCode && typeof(errors.dbConnect.errorMsg) !== 'undefined') temp = errors.dbConnect.errorMsg;
					}
					else if (typeof(errors.dbConnect.errorMsg) !== 'undefined') {
						temp = errors.dbConnect.errorMsg;
					}
					msg += temp+rowDelim;
				}
			}

			if (msg == '') {
				msg = self.getLang('Some errors occurred!', 'messages');
			}
			self.showMsg({msg: msg, error: true});
		}

		opt.success(data);
	})
	.fail(function(){
		msg = self.getLang('Ajax failed', 'messages');
		self.showMsg({msg: msg, error: true});
		opt.error();
	})
}

InstallScript.prototype.validate = function() {
	this.hideMsg();

	var valid = true;
	var elem = null;
	var fieldRequired = [];
	switch (this.action) {
		case 'step2':
			fieldRequired = ['db-name', 'host-name', 'db-user-name', 'db-driver'];
			break;
		case 'step3':
			fieldRequired = ['user-name', 'user-pass', 'user-confirm-pass'];
			break;
		case 'step4':
			fieldRequired = ['decimalMark'];
			break;
			break;
		case 'step5':
			fieldRequired = ['smtpUsername'];
			break;


	}
	var len = fieldRequired.length;
	for (var index = 0; index < len; index++) {
		elem = $('[name="'+fieldRequired[index]+'"]').filter(':visible');
		if (elem.length > 0) {
			if (elem.val() == '') {
				elem.parent().parent().addClass('has-error');
				valid = false;
			}
			else {
				elem.parent().parent().removeClass('has-error');
			}
		}
	}

	// decimal and group sep
	$('[name="thousandSeparator"]').parent().parent().removeClass('has-error');
	if (typeof(this.systemSettings.thousandSeparator) !== 'undefined'
		&& typeof(this.systemSettings.decimalMark) !== 'undefined'
		&& this.systemSettings.thousandSeparator == this.systemSettings.decimalMark
		&& valid) {

		$('[name="thousandSeparator"]').parent().parent().addClass('has-error');
		$('[name="decimalMark"]').parent().parent().addClass('has-error');
		msg = this.getLang('Thousand Separator and Decimal Mark equal', 'messages');
		this.showMsg({msg: msg, error: true});
		valid = false;
	}

	return valid;
}


InstallScript.prototype.setForm = function(opt) {
	var formId = opt.formId || 'nav';
	var action = opt.action || 'main';
	var desc = opt.desc || '';

	var actionField = $('<input>', {'name': 'action', 'value': action, 'type': 'hidden'});
	$('#'+formId).append(actionField);
	var descField = $('<textarea>', {'name': 'desc', 'value': action, 'type': 'hidden'});
	descField.val(desc);
	descField.css('display', 'none');
	$('#'+formId).append(descField);

	$('#'+formId).attr('method', 'POST');
}

InstallScript.prototype.goTo = function(action) {
	this.setForm({action: action});
	$('#nav').submit();
}

InstallScript.prototype.getLang = function(key, type) {
	return (typeof(this.langs) !== 'undefined' && typeof(this.langs[type]) !== 'undefined' && typeof(this.langs[type][key]) !== 'undefined')? this.langs[type][key] : key;
}

InstallScript.prototype.showMsg = function(opt) {
	this.hideMsg();

	var msg = opt.msg || '';
	var error = opt.error || false;
	$('#msg-box').html(msg);
	$('#msg-box').removeClass('hide');
	$('#msg-box').removeClass('alert-success');
	$('#msg-box').removeClass('alert-danger');

	if (error) $('#msg-box').addClass('alert-danger');
	else $('#msg-box').addClass('alert-success');
}

InstallScript.prototype.hideMsg = function() {
	$('#msg-box').html('');
	$('#msg-box').addClass('hide');
}

InstallScript.prototype.showLoading = function() {
	$('.loading-icon').removeClass('hide');
}

InstallScript.prototype.hideLoading = function() {
	$('.loading-icon').addClass('hide');
}

InstallScript.prototype.checkPass = function(opt) {
	var succesHand = opt.success || function(){};
	var errorHand = opt.error || function(msg){};

	if (this.userSett.pass != this.userSett.confPass) {
		errorHand('Passwords do not match');
		return;
	}

	succesHand();
}

InstallScript.prototype.actionsChecking = function() {
	var self = this;
	this.checkIndex = 0;
	this.checkErrors = [];
	this.checkAction({
		'success': true,
	});
}

InstallScript.prototype.checkAction = function(dataMain) {
	var self = this;
	var data = {};

	if (this.checkIndex == this.checkActions.length) {
		self.callbackChecking(dataMain);
		return;
	}
	var currIndex = this.checkIndex;
	var checkAction = this.checkActions[currIndex].action;
	this.checkIndex++;

	if (checkAction == 'checkModRewrite') {
		this.checkModRewrite();
		return;
	}
	if (checkAction == 'applySett') {
		data['user-name'] = this.userSett.name;
		data['user-pass'] = this.userSett.pass;
	}

	data.action = checkAction;
	$.ajax({
		url: "index.php",
		type: "POST",
		data: data,
		dataType: 'json',
	})
	.done(function(ajaxData){
		if (typeof(ajaxData) != 'undefined' && ajaxData.success) {

			self.checkAction(ajaxData);
		}
		else {
			if (typeof(self.checkActions[currIndex]) != 'undefined'
				&& typeof(self.checkActions[currIndex].break) != 'undefined'
				&& self.checkActions[currIndex].break) {
				// break next checking
				self.callbackChecking(ajaxData);
			}
		}
	})
	.fail(function(ajaxData){
		if (typeof(self.checkActions[currIndex]) != 'undefined'
			&& typeof(self.checkActions[currIndex].break) != 'undefined'
			&& self.checkActions[currIndex].break) {
			// break next checking
			var ajaxData = {
				'success': false,
				'errorMsg': ['Ajax failed']
			}
			self.callbackChecking(ajaxData);
		}
		else {
			self.checkAction(ajaxData);
		}
	})
}


InstallScript.prototype.checkModRewrite = function() {
	var self = this;
	this.modRewriteUrl;

	var urlAjax = '..'+this.modRewriteUrl;;
	var realJqXHR = $.ajax({
		url: urlAjax,
		type: "GET",
	})
	.always(function(data, textStatus, jqXHR){
		var status = jqXHR.status || realJqXHR.status || 404;
		status += '';
		var data = {'success': 0};
		if (status == '200' || status == '401') {
			var data = {'success': 1};
		}

		self.callbackModRewrite(data);

	})
}

InstallScript.prototype.callbackModRewrite = function(data) {
	var ajaxData = {
		'success': true,
	}

	if (typeof(data.success) != 'undefined' && data.success) {
		this.checkAction(ajaxData);
		return;
	}
	ajaxData.success = false;
	if (typeof(this.langs) !== 'undefined') {
		ajaxData.errorMsg = (typeof(this.langs['options']['modRewriteHelp'][this.serverType]) !== 'undefined')? this.langs['options']['modRewriteHelp'][this.serverType] : this.langs['options']['modRewriteHelp']['default'];
		ajaxData.errorMsg += (typeof(this.langs['options']['modRewriteInstruction'][this.serverType]) !== 'undefined' && typeof(this.langs['options']['modRewriteInstruction'][this.serverType][this.OS]) !== 'undefined') ? this.langs['options']['modRewriteInstruction'][this.serverType][this.OS] : '';
	}
	var realCheckIndex = this.checkIndex - 1;
	if (typeof(this.checkActions[realCheckIndex]) != 'undefined'
		&& typeof(this.checkActions[realCheckIndex].break) != 'undefined') {
		if (this.checkActions[realCheckIndex].break) {
			// break next checking
			this.callbackChecking(ajaxData);
		}
		else {
			this.checkAction(ajaxData);
		}
	}
}

InstallScript.prototype.callbackChecking = function(data) {
	this.hideLoading();
	if (typeof(data) != 'undefined' && data.success) {
		this.goTo('step4');
	}
	else {
		var desc = (typeof(data.errorMsg))? data.errorMsg : '';
		desc += (typeof(data.errorFixInstruction) != 'undefined')? data.errorFixInstruction : '';
		if (this.reChecking) {
			this.showMsg({msg: desc, error: true});
			$("#re-check").removeAttr('disabled');
		}
		else {
			this.setForm({action: 'errors', desc: desc});
			$('#nav').submit();
		}
	}
}

InstallScript.prototype.goToEspo = function() {
	var loc = window.location.href;
	loc = loc.replace(/install\/?/, '');
	window.location.replace(loc);
}

window.InstallScript = InstallScript;
