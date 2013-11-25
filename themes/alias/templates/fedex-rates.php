<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>FedEx Web Integration Wizard</title>
		<!-- FWIW Version 1.0.0 -->
		<!-- begin calendar -->
		<link rel="stylesheet" type="text/css" href="">
		<style type='text/css'>
			body{
				font-family: Arial;
				font-size: 11px;
				background-color: #FFFFFF;
				color: #333333;
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
			}
			.Title1 {
				font-size: 14px;
				color: #575659;
				font-weight: bold;
			}
			.Title2 {
				font-size: 14px;
				color: #660099;
				font-weight: bold;
			}
			.Title3 {
				font-size: 13px;
				color: #ffffff;
				font-weight: bold;
			}
			.Title4 {
				font-family:  Arial;
				font-size: 11px;
				height: 18px;
			}
			.Title5 {
				font-family: Times New Roman;
				font-size: 32px;
				color: #808080;
				font-weight: bold;
			}
			.Hr1 {
				height: 2px;
				color: #660099;
			}
			.Hr2 {
				height: 1px;
				color: #000000;
			}
			.Hr3 {
				height: 2px;
				color: #000000;
			}
			.Hr4 {
				height: 1px;
				color: #808080;
			}
			.Text1 {
				font-weight: bold;
				font-size: 10px;
				color: #af9999;
			}
			.PanelHeader {
				background-color: #660099;
				font-size: 13px;
				color: #ffffff;
				font-weight: bold;
				height: 25px;
				padding: 6 6 6 6;
			}
			.PanelHeader2 {
				background-color: #DCDCDC;
				font-size: 13px;
				color: #5F5F5F
				font-weight: bold;
				height: 25px;
			}
			.PanelHeader3 {
				background-color: #999999;
				font-size: 13px;
				color: #ffffff;
				font-weight: bold;
				height: 25px;
			}
			.PanelContent {
				color: #000000;
				background-color: #e6e6e6;
				font-size: 11px;
				height: 30px;
				padding-left: 10px;
				padding-right: 10px;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			.PanelContent2 {
				color: #999999;
				background-color: #CCCCCC;
				font-size: 10px;
				height: 30px;
			}
			.PanelContent3 {
				background-color: #DCDCDC;
				font-size: 12px;
				color: #5F5F5F;
				height: 25px;
			}
			.Buttons {
				font-size: 13px;
				background-color: #7C1FAA;
				color: #ffffff;
				height: 24px;
				border-right: #7F7F7F 2px solid;
				border-top: #CCCCCC 2px solid;
				border-left: #CCCCCC 2px solid;
				border-bottom: #7F7F7F 2px solid;
			}.BackButtons {
				font-size: 13px;
				background-color: #666;
				color: #ffffff;
				height: 24px;
				border-right: #7F7F7F 2px solid;
				border-top: #CCCCCC 2px solid;
				border-left: #CCCCCC 2px solid;
				border-bottom: #7F7F7F 2px solid;
			}.Buttons2 {
				background-color: #000000;
				font-size: 13px;
				color: #ffffff;
				height: 24px;
				border-right: #7F7F7F 2px solid;
				border-top: #CCCCCC 2px solid;
				border-left: #CCCCCC 2px solid;
				border-bottom: #7F7F7F 2px solid;
			}
			.TrWhite {
				color: #666666;
				background-color: #fff;
				font-size: 12px;
			}
			.TrGrey {
				color: #666666;
				background-color: #e6e6e6;
				font-size: 12px;
			}
			.TextGrey {
				color: #666666;
				font-size: 12px;
			}
			.FedExLink {
				color: #660099;
			}
			.Intro {
				background: #f5f5f5;
				color: #333333;
				font-size: 11px;
				border-bottom: solid 1px #660099;
				border-left: solid 1px #660099;
				border-right: solid 1px #660099;
				border-top: solid 1px #660099;
			}
			.Intro_BACKUP {
				background: #e6e6e6;
				color: #000000;
				font-size: 11px;
				padding: 10px;
				border-bottom: solid 1px #660099;
				border-left: solid 1px #660099;
				border-right: solid 1px #660099;
				border-top: solid 1px #660099;
			}
			.ResultTable {
				background: #e6e6e6;
				color: #666666;
				font-size: 12px;
				border: solid 1px #660099;
			}
			.CurrentStep {
				color: #FF6600;
				font-weight: bold;
				text-decoration: underline;
				font-size: 18px;
			}
			.CurrentStep {
				color: #000000;
				font-weight: bold;
				text-decoration: none;
				font-size: 12px;
			}
			.FinishedStep {
				font-size: 12px;
				color: #660099;
				font-weight: bold;
				text-decoration: underline;
				border :0px;
			}
			.UnFinishedStep {
				font-size: 12px;
				color: #999999;
				text-decoration: none;
			}
			.mainheader1 {
				font-size: 18px;
				color:#660099;
				font-weight: normal;
			}
			.mainheader2 {
				font-size: 14px;
				color: #999999;
				font-weight: normal;
			}
			.mainheader3 {
				font-size: 16px;
				color:#660099;
				font-weight: normal;
			}
			.mainheader4 {
				font-size: 14px;
				color:#660099;
				font-weight: bold;
				border-bottom: solid 2px #660099;
				border-left: solid 0px #660099;
				border-right: solid 0px #660099;
				border-top: solid 0px #660099;
				height: 18px;
			}
			.clearSelection {
				font-size: 11px;
				color:#660099;
			}
			.designPreviewBox{
				font-family:  Arial;
				font-size: 11px;
				color: #333333;
				border-bottom: solid 1px #868686;
				border-left: solid 1px #868686;
				border-right: solid 1px #868686;
				border-top: solid 1px #868686;
			}
			.textbox{
				font-family:  Arial;
				font-size: 11px;
				color: #333333;
				border-bottom: solid 1px #868686;
				border-left: solid 1px #868686;
				border-right: solid 1px #868686;
				border-top: solid 1px #868686;
				width: 165px;
			}
			.dropdown{
				font-family:  Arial;
				font-size: 11px;
				color: #333333;
				border-bottom: solid 1px #868686;
				border-left: solid 1px #868686;
				border-right: solid 1px #868686;
				border-top: solid 1px #868686;
			}
			/*
			 .d8888b.                    888
			d88P  Y88b                   888
			888    888                   888
			888        888  888 .d8888b  888888 .d88b.  88888b.d88b.
			888        888  888 88K      888   d88""88b 888 "888 "88b
			888    888 888  888 "Y8888b. 888   888  888 888  888  888
			Y88b  d88P Y88b 888      X88 Y88b. Y88..88P 888  888  888
			 "Y8888P"   "Y88888  88888P'  "Y888 "Y88P"  888  888  888
			*/
			#trPackageInfo, #trCurrencyType, #trDestinationCity, .PanelHeader{
				display: none;
			}
			#tblGetRates .Buttons{display: none;}
			select#ddlDestinationCountry{
				height: 23px;
				width: 155px;
				line-height: 20px;
			}
			input#txtDestinationCity{
				height: 23px;
				width: 155px !important;
				line-height: 20px;
				margin-top: 1em;
				margin-bottom: 1em;
				padding-left: 2px;
			}
			input#txtDestinationPostalCode{
				height: 23px;
				width: 155px !important;
				line-height: 20px;
				padding-left: 2px;
			}

			form#mainForm{
				margin-left: -85px;
				height: 140px;
			}
			.hidden{display: none;}

			.formFieldTitle{
				text-align: right;
				padding-right: 30px;
				width: 150px;
			}

		</style>
		<!--
		   d8b                                                      d8b          888
		   Y8P                                                      Y8P          888
		                                                                         888
		  8888  8888b.  888  888  8888b.  .d8888b   .d8888b 888d888 888 88888b.  888888
		  "888     "88b 888  888     "88b 88K      d88P"    888P"   888 888 "88b 888
		   888 .d888888 Y88  88P .d888888 "Y8888b. 888      888     888 888  888 888
		   888 888  888  Y8bd8P  888  888      X88 Y88b.    888     888 888 d88P Y88b.
		   888 "Y888888   Y88P   "Y888888  88888P'  "Y8888P 888     888 88888P"   "Y888
		   888                                                          888
		  d88P                                                          888
		888P"                                                           888
		-->

		<script language='javascript' type='text/javascript'>
			var liste = [
				["AD", "EUR"],
				["AE", "DHS"],
				["AF", ""],
				["AG", "ECD"],
				["AI", "ECD"],
				["AL", ""],
				["AM", ""],
				["AO", ""],
				["AR", "ARN"],
				["AS", "USD"],
				["AT", "EUR"],
				["AU", "AUD"],
				["AW", "AWG"],
				["AZ", ""],
				["BA", ""],
				["BB", "BBD"],
				["BD", ""],
				["BE", "EUR"],
				["BF", ""],
				["BG", ""],
				["BH", "BHD"],
				["BI", ""],
				["BJ", ""],
				["BM", "BMD"],
				["BN", "BND"],
				["BQ", "USD"],
				["BO", ""],
				["BR", "BRL"],
				["BS", "BSD"],
				["BT", ""],
				["BW", ""],
				["BY", ""],
				["BZ", ""],
				["CA", "CAD"],
				["CD", ""],
				["CG", ""],
				["CH", "SFR"],
				["CI", ""],
				["CK", "NZD"],
				["CL", "CHP"],
				["CM", ""],
				["CN", "CNY"],
				["CO", "COP"],
				["CR", "CRC"],
				["CV", ""],
				["CW", "ANG"],
				["CY", "EUR"],
				["CZ", "CZK"],
				["DE", "EUR"],
				["DJ", ""],
				["DK", "DKK"],
				["DM", "ECD"],
				["DO", "RDD"],
				["DZ", ""],
				["EC", ""],
				["EE", "EUR"],
				["EG", "EGP"],
				["ER", ""],
				["ES", "EUR"],
				["ET", ""],
				["FI", "EUR"],
				["FJ", ""],
				["FM", "USD"],
				["FO", "DKK"],
				["FR", "EUR"],
				["GA", ""],
				["GB", "UKL"],
				["GD", "ECD"],
				["GE", ""],
				["GF", ""],
				["GH", ""],
				["GI", ""],
				["GL", "DKK"],
				["GM", ""],
				["GN", ""],
				["GP", "EUR"],
				["GQ", ""],
				["GR", "EUR"],
				["GT", "GTQ"],
				["GU", "USD"],
				["GY", ""],
				["HK", "HKD"],
				["HN", ""],
				["HR", ""],
				["HT", ""],
				["HU", "HUF"],
				["ID", ""],
				["IE", "EUR"],
				["IL", "ILS"],
				["IN", "INR"],
				["IQ", ""],
				["IS", ""],
				["IT", "EUR"],
				["JM", "JAD"],
				["JO", ""],
				["JP", "JYE"],
				["KE", "KES"],
				["KG", ""],
				["KH", ""],
				["KN", "ECD"],
				["KR", "WON"],
				["KW", "KUD"],
				["KY", "CID"],
				["KZ", "KZT"],
				["LA", ""],
				["LB", ""],
				["LC", "ECD"],
				["LI", "SFR"],
				["LK", ""],
				["LR", ""],
				["LS", ""],
				["LT", "LTL"],
				["LU", "EUR"],
				["LV", "LVL"],
				["LY", ""],
				["MA", ""],
				["MC", "EUR"],
				["MD", ""],
				["ME", "EUR"],
				["MG", ""],
				["MF", "USD"],
				["MH", "USD"],
				["MK", ""],
				["ML", ""],
				["MN", ""],
				["MO", "MOP"],
				["MP", "USD"],
				["MQ", "EUR"],
				["MR", ""],
				["MS", "ECD"],
				["MT", "EUR"],
				["MU", ""],
				["MV", ""],
				["MW", ""],
				["MX", "NMP"],
				["MY", "MYR"],
				["MZ", ""],
				["NA", ""],
				["NC", ""],
				["NE", ""],
				["NG", ""],
				["NI", ""],
				["NL", "EUR"],
				["NO", "NOK"],
				["NP", ""],
				["NZ", "NZD"],
				["OM", ""],
				["PA", "PAB"],
				["PE", ""],
				["PF", ""],
				["PG", ""],
				["PH", "PHP"],
				["PK", "PKR"],
				["PL", "PLN"],
				["PR", "USD"],
				["PS", ""],
				["PT", "EUR"],
				["PW", "USD"],
				["PY", ""],
				["QA", ""],
				["RE", "EUR"],
				["RO", ""],
				["RS", ""],
				["RU", "RUR"],
				["RW", ""],
				["SA", "SAR"],
				["SC", ""],
				["SE", "SEK"],
				["SG", "SID"],
				["SI", "EUR"],
				["SK", "EUR"],
				["SN", ""],
				["SR", ""],
				["SV", ""],
				["SY", ""],
				["SZ", ""],
				["SX", "USD"],
				["TC", "USD"],
				["TD", ""],
				["TG", ""],
				["TH", "THB"],
				["TL", ""],
				["TM", ""],
				["TN", ""],
				["TO", ""],
				["TR", "TRY"],
				["TT", "TTD"],
				["TW", "NTD"],
				["TZ", ""],
				["UA", ""],
				["UG", "UGX"],
				["US", "USD"],
				["UY", "UYP"],
				["UZ", ""],
				["VC", "ECD"],
				["VE", "VEF"],
				["VG", "USD"],
				["VI", "USD"],
				["VN", ""],
				["VU", ""],
				["WF", ""],
				["WS", "WST"],
				["YE", ""],
				["ZA", "ZAR"],
				["ZM", ""],
				["ZW", ""]
			];

			function FindControl(control) {
				return document.getElementById(control);
			}

			function Show() {
				for (var i = 0; i < arguments.length; i++) {
					FindControl(arguments[i]).style.display = "";
				}
			}

			function Hide() {
				for (var i = 0; i < arguments.length; i++) {
					FindControl(arguments[i]).style.display = "none";
				}
			}

			function IsPackageDetailsUserEntry() {
				var returnValue = false;
				var hdnPackageDetailsUserEntry = FindControl('hdnPackageDetailsUserEntry');
				if ( !! hdnPackageDetailsUserEntry) {
					returnValue = hdnPackageDetailsUserEntry.value;
				}
				return returnValue;
			}

			function SetPackageCheckboxesAndQuantity() {
				var obj = GetPackageCount();
				var isPackageDetailsUserEntry = IsPackageDetailsUserEntry();
				if (isPackageDetailsUserEntry == 'false') {
					switch (obj) {
					case '5':
						var chkPackage5Type = FindControl('chkPackage5Type');
						chkPackage5Type.checked = true;
						chkPackage5Type.style.display = "none";
						var txtQuantity5 = FindControl('txtQuantity5');
						txtQuantity5.value = '1';
						txtQuantity5.readOnly = true;
					case '4':
						var chkPackage4Type = FindControl('chkPackage4Type');
						chkPackage4Type.checked = true;
						chkPackage4Type.style.display = "none";
						var txtQuantity4 = FindControl('txtQuantity4');
						txtQuantity4.value = '1';
						txtQuantity4.readOnly = true;
					case '3':
						var chkPackage3Type = FindControl('chkPackage3Type');
						chkPackage3Type.checked = true;
						chkPackage3Type.style.display = "none";
						var txtQuantity3 = FindControl('txtQuantity3');
						txtQuantity3.value = '1';
						txtQuantity3.readOnly = true;
					case '2':
						var chkPackage2Type = FindControl('chkPackage2Type');
						chkPackage2Type.checked = true;
						chkPackage2Type.style.display = "none";
						var txtQuantity2 = FindControl('txtQuantity2');
						txtQuantity2.value = '1';
						txtQuantity2.readOnly = true;
					case '1':
						var chkPackage1Type = FindControl('chkPackage1Type');
						chkPackage1Type.checked = true;
						chkPackage1Type.style.display = "none";
						var txtQuantity1 = FindControl('txtQuantity1');
						txtQuantity1.value = '1';
						txtQuantity1.readOnly = true;
					}
				}
			}

			function SetDimensionsProfiles() {
				if (FindControl('hdnPackageDimensions1').value != 'null') {
					var dims = FindControl('hdnPackageDimensions1').value;
					ChangeDdlSelectedIndex('ddlPackage1', dims);
					var ddlPackage1 = FindControl('ddlPackage1');
					FindControl('txtPackageDimensions1').value = ddlPackage1.options[ddlPackage1.selectedIndex].text;
				}
				if (FindControl('hdnPackageDimensions2').value != 'null') {
					var dims = FindControl('hdnPackageDimensions2').value;
					ChangeDdlSelectedIndex('ddlPackage2', dims);
					var ddlPackage2 = FindControl('ddlPackage2');
					FindControl('txtPackageDimensions2').value = ddlPackage2.options[ddlPackage2.selectedIndex].text;
				}
				if (FindControl('hdnPackageDimensions3').value != 'null') {
					var dims = FindControl('hdnPackageDimensions3').value;
					ChangeDdlSelectedIndex('ddlPackage3', dims);
					var ddlPackage3 = FindControl('ddlPackage3');
					FindControl('txtPackageDimensions3').value = ddlPackage3.options[ddlPackage3.selectedIndex].text;
				}
				if (FindControl('hdnPackageDimensions4').value != 'null') {
					var dims = FindControl('hdnPackageDimensions4').value;
					ChangeDdlSelectedIndex('ddlPackage4', dims);
					var ddlPackage4 = FindControl('ddlPackage4');
					FindControl('txtPackageDimensions4').value = ddlPackage4.options[ddlPackage4.selectedIndex].text;
				}
				if (FindControl('hdnPackageDimensions5').value != 'null') {
					var dims = FindControl('hdnPackageDimensions5').value;
					ChangeDdlSelectedIndex('ddlPackage5', dims);
					var ddlPackage5 = FindControl('ddlPackage5');
					FindControl('txtPackageDimensions5').value = ddlPackage5.options[ddlPackage5.selectedIndex].text;
				}
			}

			function SetPackageWeight() {
				var obj = GetPackageCount();
				var isPackageDetailsUserEntry = IsPackageDetailsUserEntry();
				if (isPackageDetailsUserEntry == 'false') {
					switch (obj) {
					case '5':
						var packageWeight5 = FindControl('hdnPackageWeight5').value;
						var txtWeight5 = FindControl('txtWeight5');
						txtWeight5.value = packageWeight5;
						txtWeight5.readOnly = true;
					case '4':
						var packageWeight4 = FindControl('hdnPackageWeight4').value;
						var txtWeight4 = FindControl('txtWeight4');
						txtWeight4.value = packageWeight4;
						txtWeight4.readOnly = true;
					case '3':
						var packageWeight3 = FindControl('hdnPackageWeight3').value;
						var txtWeight3 = FindControl('txtWeight3');
						txtWeight3.value = packageWeight3;
						txtWeight3.readOnly = true;
					case '2':
						var packageWeight2 = FindControl('hdnPackageWeight2').value;
						var txtWeight2 = FindControl('txtWeight2');
						txtWeight2.value = packageWeight2;
						txtWeight2.readOnly = true;
					case '1':
						var packageWeight1 = FindControl('hdnPackageWeight1').value;
						var txtWeight1 = FindControl('txtWeight1');
						txtWeight1.value = packageWeight1;
						txtWeight1.readOnly = true;
						var shipmentWeightUnit = FindControl('hdnShipmentWeightUnit').value;
						var ddlPackagesWeightUnit1 = FindControl('ddlPackagesWeightUnit1');
						ddlPackagesWeightUnit1.value = shipmentWeightUnit;
						ddlPackagesWeightUnit1.style.display = "none";
						var txtWeightUnit1 = FindControl('txtWeightUnit1');
						txtWeightUnit1.style.display = "";
					}
					ChangeWeightUnit(FindControl('ddlPackagesWeightUnit1').value);
				}
			}

			function SetDimensionsTextboxes() {
				if (FindControl('hdnDimensionsHeight').value != 'null') {
					var height = FindControl('hdnDimensionsHeight').value;
					var txtDimensionsHeight1 = FindControl('txtDimensionsHeight1');
					txtDimensionsHeight1.value = height;
					txtDimensionsHeight1.readOnly = true;
					var txtDimensionsHeight2 = FindControl('txtDimensionsHeight2');
					txtDimensionsHeight2.value = height;
					txtDimensionsHeight2.readOnly = true;
					var txtDimensionsHeight3 = FindControl('txtDimensionsHeight3');
					txtDimensionsHeight3.value = height;
					txtDimensionsHeight3.readOnly = true;
					var txtDimensionsHeight4 = FindControl('txtDimensionsHeight4');
					txtDimensionsHeight4.value = height;
					txtDimensionsHeight4.readOnly = true;
					var txtDimensionsHeight5 = FindControl('txtDimensionsHeight5');
					txtDimensionsHeight5.value = height;
					txtDimensionsHeight5.readOnly = true;
				}
				if (FindControl('hdnDimensionsLength').value != 'null') {
					var length = FindControl('hdnDimensionsLength').value;
					var txtDimensionsLength1 = FindControl('txtDimensionsLength1');
					txtDimensionsLength1.value = length;
					txtDimensionsLength1.readOnly = true;
					var txtDimensionsLength2 = FindControl('txtDimensionsLength2');
					txtDimensionsLength2.value = length;
					txtDimensionsLength2.readOnly = true;
					var txtDimensionsLength3 = FindControl('txtDimensionsLength3');
					txtDimensionsLength3.value = length;
					txtDimensionsLength3.readOnly = true;
					var txtDimensionsLength4 = FindControl('txtDimensionsLength4');
					txtDimensionsLength4.value = length;
					txtDimensionsLength4.readOnly = true;
					var txtDimensionsLength5 = FindControl('txtDimensionsLength5');
					txtDimensionsLength5.value = length;
					txtDimensionsLength5.readOnly = true;
				}
				if (FindControl('hdnDimensionsWidth').value != 'null') {
					var width = FindControl('hdnDimensionsWidth').value;
					var txtDimensionsWidth1 = FindControl('txtDimensionsWidth1');
					txtDimensionsWidth1.value = width;
					txtDimensionsWidth1.readOnly = true;
					var txtDimensionsWidth2 = FindControl('txtDimensionsWidth2');
					txtDimensionsWidth2.value = width;
					txtDimensionsWidth2.readOnly = true;
					var txtDimensionsWidth3 = FindControl('txtDimensionsWidth3');
					txtDimensionsWidth3.value = width;
					txtDimensionsWidth3.readOnly = true;
					var txtDimensionsWidth4 = FindControl('txtDimensionsWidth4');
					txtDimensionsWidth4.value = width;
					txtDimensionsWidth4.readOnly = true;
					var txtDimensionsWidth5 = FindControl('txtDimensionsWidth5');
					txtDimensionsWidth5.value = width;
					txtDimensionsWidth5.readOnly = true;
				}
				if (FindControl('hdnDimensionsUnits').value != 'null') {
					var units = FindControl('hdnDimensionsUnits').value;
					ChangeDdlSelectedIndex('ddlDimensionsUnit1', units);
					ChangeDimensionsUnit(units);
					document.getElementById('txtDimensionsUnit1').value = units;
					FindControl('ddlDimensionsUnit1').style.display = "none";
				}
			}

			function ShowHideTable() {
				var originCountry = 'MX';
				if (originCountry != 'null') {
					ChangeDdlSelectedIndex('ddlCountry', originCountry);
					document.getElementById("trOriginCountryCode").style.display = "none";
				}
				SetStateVisibility();
				SetDestinationVisibility();
				SetPackageCheckboxesAndQuantity();
				SetPackageWeight();
				SetDimensionsTextboxes();
				SetDimensionsProfiles();
				ChangeIdenticalType(document.getElementById('isIdentical').value);
				SummarizeQuantity();
				if (false) {
					SetSpecialServices();
					CheckSignatureOptions();
					CheckHomeDeliveryPremium();
					CheckDryIce();
					CheckDangerousGoods();
					CheckHazardousMaterials();
				}
			}

			function IsYourPackagingSelected() {
				var isYourPackagingSelected = false;
				var ddlPackagingType1 = FindControl('ddlPackagingType1');
				if (ddlPackagingType1 != null) {
					var value = ddlPackagingType1.value;
					if ('6' == value) {
						isYourPackagingSelected = true;
					}
				}
				return isYourPackagingSelected;
			}

			function IsYourPackagingOnly() {
				var isYourPackagingOnly = false;
				var ddlPackagingType1 = FindControl('ddlPackagingType1');
				var txtPackagingType1 = FindControl('txtPackagingType1');
				if (ddlPackagingType1 != null) {
					if (ddlPackagingType1.options.length == 2 && ddlPackagingType1.options[1].value == '6') {
						isYourPackagingOnly = true;
					}
				} else if (txtPackagingType1 != null) {
					if (txtPackagingType1.value == 'Your Packaging') {
						isYourPackagingOnly = true;
					}
				}
				return isYourPackagingOnly;
			}

			function ShowDimensions() {
				var count = GetPackageCount();
				var isPackageDetailsUserEntry = IsPackageDetailsUserEntry();
				var isYourPackagingSelected = IsYourPackagingSelected();
				var isYourPackagingOnly = IsYourPackagingOnly();
				if (isYourPackagingSelected || isYourPackagingOnly) {
					if ('1' == '2' && isPackageDetailsUserEntry == 'true') {
						switch (count) {
						case '5':
							document.getElementById('ddlPackage5').style.display = '';
						case '4':
							document.getElementById('ddlPackage4').style.display = '';
						case '3':
							document.getElementById('ddlPackage3').style.display = '';
						case '2':
							document.getElementById('ddlPackage2').style.display = '';
						case '1':
							document.getElementById('ddlPackage1').style.display = '';
						}
					} else if ('1' == '2' && isPackageDetailsUserEntry == 'false') {
						switch (count) {
						case '5':
							document.getElementById('txtPackageDimensions5').style.display = '';
						case '4':
							document.getElementById('txtPackageDimensions4').style.display = '';
						case '3':
							document.getElementById('txtPackageDimensions3').style.display = '';
						case '2':
							document.getElementById('txtPackageDimensions2').style.display = '';
						case '1':
							document.getElementById('txtPackageDimensions1').style.display = '';
						}
					} else if ('1' == '0') {
						switch (count) {
						case '5':
							document.getElementById('txtDimensionsLength5').style.display = '';
							document.getElementById('txtDimensionsWidth5').style.display = '';
							document.getElementById('txtDimensionsHeight5').style.display = '';
							document.getElementById('txtDimensionsUnit5').style.display = '';
						case '4':
							document.getElementById('txtDimensionsLength4').style.display = '';
							document.getElementById('txtDimensionsWidth4').style.display = '';
							document.getElementById('txtDimensionsHeight4').style.display = '';
							document.getElementById('txtDimensionsUnit4').style.display = '';
						case '3':
							document.getElementById('txtDimensionsLength3').style.display = '';
							document.getElementById('txtDimensionsWidth3').style.display = '';
							document.getElementById('txtDimensionsHeight3').style.display = '';
							document.getElementById('txtDimensionsUnit3').style.display = '';
						case '2':
							document.getElementById('txtDimensionsLength2').style.display = '';
							document.getElementById('txtDimensionsWidth2').style.display = '';
							document.getElementById('txtDimensionsHeight2').style.display = '';
							document.getElementById('txtDimensionsUnit2').style.display = '';
						case '1':
							document.getElementById('txtDimensionsLength1').style.display = '';
							document.getElementById('txtDimensionsWidth1').style.display = '';
							document.getElementById('txtDimensionsHeight1').style.display = '';
							document.getElementById('ddlDimensionsUnit1').style.display = '';
						}
					} else if ('1' == '1') {
						switch (count) {
						case '5':
							document.getElementById('txtDimensionsLength5').style.display = '';
							document.getElementById('txtDimensionsWidth5').style.display = '';
							document.getElementById('txtDimensionsHeight5').style.display = '';
							document.getElementById('txtDimensionsUnit5').style.display = '';
						case '4':
							document.getElementById('txtDimensionsLength4').style.display = '';
							document.getElementById('txtDimensionsWidth4').style.display = '';
							document.getElementById('txtDimensionsHeight4').style.display = '';
							document.getElementById('txtDimensionsUnit4').style.display = '';
						case '3':
							document.getElementById('txtDimensionsLength3').style.display = '';
							document.getElementById('txtDimensionsWidth3').style.display = '';
							document.getElementById('txtDimensionsHeight3').style.display = '';
							document.getElementById('txtDimensionsUnit3').style.display = '';
						case '2':
							document.getElementById('txtDimensionsLength2').style.display = '';
							document.getElementById('txtDimensionsWidth2').style.display = '';
							document.getElementById('txtDimensionsHeight2').style.display = '';
							document.getElementById('txtDimensionsUnit2').style.display = '';
						case '1':
							document.getElementById('txtDimensionsLength1').style.display = '';
							document.getElementById('txtDimensionsWidth1').style.display = '';
							document.getElementById('txtDimensionsHeight1').style.display = '';
							document.getElementById('txtDimensionsUnit1').style.display = '';
						}
					}
				}
			}

			function ChangeWeightUnit(value) {
				if (value == "0") {
					document.getElementById('txtWeightUnit1').value = "kg";
					document.getElementById('txtWeightUnit2').value = "kg";
					document.getElementById('txtWeightUnit3').value = "kg";
					document.getElementById('txtWeightUnit4').value = "kg";
					document.getElementById('txtWeightUnit5').value = "kg";
					document.getElementById('txtTotalWeightUnit').value = "kg";
				} else if (value == "1") {
					document.getElementById('txtWeightUnit1').value = "lbs";
					document.getElementById('txtWeightUnit2').value = "lbs";
					document.getElementById('txtWeightUnit3').value = "lbs";
					document.getElementById('txtWeightUnit4').value = "lbs";
					document.getElementById('txtWeightUnit5').value = "lbs";
					document.getElementById('txtTotalWeightUnit').value = "lbs";
				} else {
					document.getElementById('txtWeightUnit1').value = "";
					document.getElementById('txtWeightUnit2').value = "";
					document.getElementById('txtWeightUnit3').value = "";
					document.getElementById('txtWeightUnit4').value = "";
					document.getElementById('txtWeightUnit5').value = "";
					document.getElementById('txtTotalWeightUnit').value = "";
				}
			}

			function ChangeIdenticalType(value) {
				document.getElementById('isIdentical').value = value;
				var isPackageDetailsUserEntry = IsPackageDetailsUserEntry();
				if (value == '1') {
					FindControl('chkPackage1Type').style.display = "none";
					UncheckPackageCheckboxes();
				} else {
					if (isPackageDetailsUserEntry == 'true') {
						FindControl('chkPackage1Type').style.display = "";
					}
				}
				EnableDisablePackages();
			}

			function UncheckPackageCheckboxes() {
				FindControl('chkPackage1Type').checked = false;
				FindControl('chkPackage2Type').checked = false;
				FindControl('chkPackage3Type').checked = false;
				FindControl('chkPackage4Type').checked = false;
				FindControl('chkPackage5Type').checked = false;
			}

			function ChangeDdlSelectedIndex(control, value) {
				var list = document.getElementById(control);
				for (i = 0; i < list.options.length; i++) {
					if (list.options[i].value == value) list.options[i].selected = "selected";
					else list.options[i].selected = "";
				}
			}

			function HideDimensions() {
				if ('1' == '0' || '1' == '1') {
					document.getElementById('txtDimensionsLength1').style.display = 'none';
					document.getElementById('txtDimensionsLength2').style.display = 'none';
					document.getElementById('txtDimensionsLength3').style.display = 'none';
					document.getElementById('txtDimensionsLength4').style.display = 'none';
					document.getElementById('txtDimensionsLength5').style.display = 'none';
					document.getElementById('txtDimensionsWidth1').style.display = 'none';
					document.getElementById('txtDimensionsWidth2').style.display = 'none';
					document.getElementById('txtDimensionsWidth3').style.display = 'none';
					document.getElementById('txtDimensionsWidth4').style.display = 'none';
					document.getElementById('txtDimensionsWidth5').style.display = 'none';
					document.getElementById('txtDimensionsHeight1').style.display = 'none';
					document.getElementById('txtDimensionsHeight2').style.display = 'none';
					document.getElementById('txtDimensionsHeight3').style.display = 'none';
					document.getElementById('txtDimensionsHeight4').style.display = 'none';
					document.getElementById('txtDimensionsHeight5').style.display = 'none';
					document.getElementById('ddlDimensionsUnit1').style.display = 'none';
					document.getElementById('txtDimensionsUnit1').style.display = 'none';
					document.getElementById('txtDimensionsUnit2').style.display = 'none';
					document.getElementById('txtDimensionsUnit3').style.display = 'none';
					document.getElementById('txtDimensionsUnit4').style.display = 'none';
					document.getElementById('txtDimensionsUnit5').style.display = 'none';
				}
				if ('1' == '2') {
					document.getElementById('ddlPackage1').style.display = 'none';
					document.getElementById('ddlPackage2').style.display = 'none';
					document.getElementById('ddlPackage3').style.display = 'none';
					document.getElementById('ddlPackage4').style.display = 'none';
					document.getElementById('ddlPackage5').style.display = 'none';
					document.getElementById('txtPackageDimensions1').style.display = 'none';
					document.getElementById('txtPackageDimensions2').style.display = 'none';
					document.getElementById('txtPackageDimensions3').style.display = 'none';
					document.getElementById('txtPackageDimensions4').style.display = 'none';
					document.getElementById('txtPackageDimensions5').style.display = 'none';
				}
			}

			function ChangePackageType(value) {
				var type = "";
				HideDimensions();
				switch (value) {
				case '0':
					type = "FedEx 10kg Box";
					break;
				case '1':
					type = "FedEx 25kg Box";
					break;
				case '2':
					type = "FedEx Box";
					break;
				case '3':
					type = "FedEx Envelope";
					break;
				case '4':
					type = "FedEx Pak";
					break;
				case '5':
					type = "FedEx Tube";
					break;
				case '6':
					type = "Your Packaging";
					ShowDimensions();
					break;
				}
				document.getElementById('txtPackagingType2').value = type;
				document.getElementById('txtPackagingType3').value = type;
				document.getElementById('txtPackagingType4').value = type;
				document.getElementById('txtPackagingType5').value = type;
			}

			function ChangeDimensionsUnit(value) {
				if (value == "IN") value = "in";
				else if (value == "CM") value = "cm";
				else value = "";
				document.getElementById('txtDimensionsUnit2').value = value;
				document.getElementById('txtDimensionsUnit3').value = value;
				document.getElementById('txtDimensionsUnit4').value = value;
				document.getElementById('txtDimensionsUnit5').value = value;
			}

			function ActivatePackage() {
				SummarizeQuantity();
				SummarizeWeight();
				SummarizeDeclaredValue();
			}

			function SummarizeValue(objName, value) {
				var obj = document.getElementById(objName);
				obj.value = parseFloat(obj.value) + parseFloat(value);
			}

			function SummarizeQuantity() {
				var quantity1 = document.getElementById("txtQuantity1").value;
				var quantity2 = document.getElementById("txtQuantity2").value;
				var quantity3 = document.getElementById("txtQuantity3").value;
				var quantity4 = document.getElementById("txtQuantity4").value;
				var quantity5 = document.getElementById("txtQuantity5").value;
				var obj = document.getElementById("txtPackagePieceCount");
				if (quantity1 == '' || (document.getElementById("chkPackage1Type").checked == false && document.getElementById("isIdentical").value != '1')) quantity1 = "0";
				if (quantity2 == '' || document.getElementById("chkPackage2Type").checked == false) quantity2 = "0";
				if (quantity3 == '' || document.getElementById("chkPackage3Type").checked == false) quantity3 = "0";
				if (quantity4 == '' || document.getElementById("chkPackage4Type").checked == false) quantity4 = "0";
				if (quantity5 == '' || document.getElementById("chkPackage5Type").checked == false) quantity5 = "0";
				obj.value = parseFloat(quantity1) + parseFloat(quantity2) + parseFloat(quantity3) + parseFloat(quantity4) + parseFloat(quantity5);
				SummarizeWeight();
				SummarizeDeclaredValue();
			}

			function SummarizeDeclaredValue() {
				var value1 = document.getElementById("txtValue1").value;
				var value2 = document.getElementById("txtValue2").value;
				var value3 = document.getElementById("txtValue3").value;
				var value4 = document.getElementById("txtValue4").value;
				var value5 = document.getElementById("txtValue5").value;
				var quantity1 = document.getElementById("txtQuantity1").value;
				var quantity2 = document.getElementById("txtQuantity2").value;
				var quantity3 = document.getElementById("txtQuantity3").value;
				var quantity4 = document.getElementById("txtQuantity4").value;
				var quantity5 = document.getElementById("txtQuantity5").value;
				var obj = document.getElementById("txtTotalValue");
				if (value1 == '') value1 = "0";
				if (value2 == '') value2 = "0";
				if (value3 == '') value3 = "0";
				if (value4 == '') value4 = "0";
				if (value5 == '') value5 = "0";
				if (quantity1 == '' || (document.getElementById("chkPackage1Type").checked == false && document.getElementById("isIdentical").value != '1')) quantity1 = "0";
				if (quantity2 == '' || document.getElementById("chkPackage2Type").checked == false) quantity2 = "0";
				if (quantity3 == '' || document.getElementById("chkPackage3Type").checked == false) quantity3 = "0";
				if (quantity4 == '' || document.getElementById("chkPackage4Type").checked == false) quantity4 = "0";
				if (quantity5 == '' || document.getElementById("chkPackage5Type").checked == false) quantity5 = "0";
				obj.value = parseFloat(value1) * parseFloat(quantity1) + parseFloat(value2) * parseFloat(quantity2) + parseFloat(value3) * parseFloat(quantity3) + parseFloat(value4) * parseFloat(quantity4) + parseFloat(value5) * parseFloat(quantity5);
			}

			function SummarizeWeight() {
				var weigth1 = document.getElementById("txtWeight1").value;
				var weigth2 = document.getElementById("txtWeight2").value;
				var weigth3 = document.getElementById("txtWeight3").value;
				var weigth4 = document.getElementById("txtWeight4").value;
				var weigth5 = document.getElementById("txtWeight5").value;
				var quantity1 = document.getElementById("txtQuantity1").value;
				var quantity2 = document.getElementById("txtQuantity2").value;
				var quantity3 = document.getElementById("txtQuantity3").value;
				var quantity4 = document.getElementById("txtQuantity4").value;
				var quantity5 = document.getElementById("txtQuantity5").value;
				if (weigth1 == '') weigth1 = "0";
				if (weigth2 == '') weigth2 = "0";
				if (weigth3 == '') weigth3 = "0";
				if (weigth4 == '') weigth4 = "0";
				if (weigth5 == '') weigth5 = "0";
				if (quantity1 == '' || (document.getElementById("chkPackage1Type").checked == false && document.getElementById("isIdentical").value != '1')) quantity1 = "0";
				if (quantity2 == '' || document.getElementById("chkPackage2Type").checked == false) quantity2 = "0";
				if (quantity3 == '' || document.getElementById("chkPackage3Type").checked == false) quantity3 = "0";
				if (quantity4 == '' || document.getElementById("chkPackage4Type").checked == false) quantity4 = "0";
				if (quantity5 == '' || document.getElementById("chkPackage5Type").checked == false) quantity5 = "0";
				var obj = document.getElementById("txtTotalWeight");
				obj.value = parseFloat(weigth1) * parseFloat(quantity1) + parseFloat(weigth2) * parseFloat(quantity2) + parseFloat(weigth3) * parseFloat(quantity3) + parseFloat(weigth4) * parseFloat(quantity4) + parseFloat(weigth5) * parseFloat(quantity5);
			}

			function UpdateCurrency(myObj) {
				var ddlCurrencyType = document.getElementById('ddlCurrencyType');
				if (myObj != null && ddlCurrencyType != null) {
					ChangeSelectedIndex('ddlCurrencyType', '-1');
					for (var i = 0; i < liste.length; i++) {
						if (myObj.options[myObj.selectedIndex].value == liste[i][0]) {
							for (var j = 0; j < ddlCurrencyType.options.length; j++)
								if (ddlCurrencyType.options[j].value == liste[i][1]) ddlCurrencyType.options[j].selected = true;
						}
					}
					var currencySelectedIndex = ddlCurrencyType.selectedIndex;
					ChangeCurrencyType(ddlCurrencyType.options[currencySelectedIndex].text);
				}
			}

			function ChangeSelectedIndex(control, value) {
				var list = document.getElementById(control);
				for (i = 0; i < list.options.length; i++) {
					if (list.options[i].value == value) list.options[i].selected = "selected";
					else list.options[i].selected = "";
				}
			}

			function ChangeCurrencyType(value) {
				var txtCurrency = document.getElementById('txtCurrency');
				if (txtCurrency != null) {
					if (value != '-1' && value != 'Select') {
						txtCurrency.value = value;
					} else {
						txtCurrency.value = 'United States Dollars';
					}
				}
			}

			function SetStateVisibility() {
				var ddlCountry = document.getElementById('ddlCountry');
				var ddlUSAStates = document.getElementById('ddlUSAStates');
				var ddlCanadaStates = document.getElementById('ddlCanadaStates');
				UpdateCurrency(ddlCountry);
				if (ddlCountry != null && ddlUSAStates != null && ddlCanadaStates != null) {
					if (ddlCountry.value == 'US') {
						ddlCanadaStates.style.display = "none";
						ddlUSAStates.style.display = "";
						ddlUSAStates.disabled = false;
						ChangeDdlSelectedIndex('ddlUSAStates', '-1');
					} else if (ddlCountry.value == 'CA') {
						ddlCanadaStates.style.display = "";
						ddlUSAStates.style.display = "none";
						ddlCanadaStates.disabled = false;
						ChangeDdlSelectedIndex('ddlCanadaStates', '-1');
					} else {
						ddlCanadaStates.disabled = true;
						ddlUSAStates.disabled = true;
						ChangeDdlSelectedIndex('ddlUSAStates', '-1');
						ChangeDdlSelectedIndex('ddlCanadaStates', '-1');
					}
				} else if (false) {
					ddlUSAStates.style.display = "";
					ddlUSAStates.disabled = false;
				} else if (false) {
					ddlCanadaStates.style.display = "";
					ddlCanadaStates.disabled = false;
				}
				SetSpecialServices();
			}

			function SetDestinationVisibility() {
				var ddlDestinationCountry = document.getElementById('ddlDestinationCountry');
				var trDestinationState = document.getElementById('trDestinationState');
				var trDestinationProvince = document.getElementById('trDestinationProvince');
				if ( !! ddlDestinationCountry) {
					if (ddlDestinationCountry.value == "US") {
						if ( !! trDestinationProvince) {
							trDestinationProvince.style.display = "none";
						}
						if ( !! trDestinationState) {
							trDestinationState.style.display = "";
						}
					} else if (ddlDestinationCountry.value == "CA") {
						if ( !! trDestinationProvince) {
							trDestinationProvince.style.display = "";
						}
						if ( !! trDestinationState) {
							trDestinationState.style.display = "none";
						}
					} else {
						if ( !! trDestinationProvince) {
							trDestinationProvince.style.display = "none";
						}
						if ( !! trDestinationState) {
							trDestinationState.style.display = "none";
						}
					}
					SetSpecialServices();
				}
			}

			function SetSpecialServices() {
				var ddlServiceType = FindControl('ddlServiceType');
				if ( !! ddlServiceType) {
					var serviceType = ddlServiceType.value;
					if (serviceType == '16' || serviceType == '17' || serviceType == '18' || serviceType == '19' || serviceType == '6' || serviceType == '15' || serviceType == '23') {
						SetPickupDropoffOptions(false);
					} else {
						SetPickupDropoffOptions(true);
					} if (serviceType == '16' || serviceType == '17' || serviceType == '18' || serviceType == '19') {
						var tblHubID = FindControl('tblHubID');
						if ( !! tblHubID) {
							Show('tblHubID');
						}
						if (false) {
							document.getElementById('trSignatureOption').style.display = "none";
							document.getElementById('trSignatureOptionType').style.display = "none";
							document.getElementById('trHomeDeliveryPremium').style.display = "none";
							document.getElementById('trHomeDeliveryPremiumType').style.display = "none";
							document.getElementById('trDryIce').style.display = "none";
							document.getElementById('trDryIce2').style.display = "none";
							document.getElementById('trDangerousGoods').style.display = "none";
							document.getElementById('trDangerousGoodsType').style.display = "none";
							document.getElementById('trHazardousMaterials').style.display = "none";
							document.getElementById('tblSpecialServices').style.display = "none";
						}
					} else {
						var tblHubID = FindControl('tblHubID');
						if ( !! tblHubID) {
							Hide('tblHubID');
						}
						if (false) {
							var options = document.getElementById('hdnSpecialServicesOptions').value;
							document.getElementById('tblSpecialServices').style.display = "";
							if (options == 'null' || options == '') {
								document.getElementById('trSignatureOption').style.display = "none";
								document.getElementById('trSignatureOptionType').style.display = "none";
								document.getElementById('chkSignatureOptions').checked = "";
								document.getElementById('trHomeDeliveryPremium').style.display = "none";
								document.getElementById('trHomeDeliveryPremiumType').style.display = "none";
								document.getElementById('chkHomeDeliveryPremium').checked = "";
								document.getElementById('trDryIce').style.display = "none";
								document.getElementById('trDryIce2').style.display = "none";
								document.getElementById('chkDryIce').checked = "";
								document.getElementById('trDangerousGoods').style.display = "none";
								document.getElementById('trDangerousGoodsType').style.display = "none";
								document.getElementById('chkDangerousGoods').checked = "";
								document.getElementById('trHazardousMaterials').style.display = "none";
								document.getElementById('chkHazardousMaterials').checked = "";
								document.getElementById('tblSpecialServices').style.display = "none";
							} else if (options.search("1") != '-1') {
								document.getElementById('trSignatureOption').style.display = "";
							} else {
								document.getElementById('trSignatureOption').style.display = "none";
								document.getElementById('trSignatureOptionType').style.display = "none";
								document.getElementById('chkSignatureOptions').checked = "";
							} if (options.search("2") != '-1' && (serviceType == '15' || serviceType == '-1')) {
								document.getElementById('trHomeDeliveryPremium').style.display = "";
							} else {
								document.getElementById('trHomeDeliveryPremium').style.display = "none";
								document.getElementById('trHomeDeliveryPremiumType').style.display = "none";
								document.getElementById('chkHomeDeliveryPremium').checked = "";
							} if (options.search("4") != '-1' && serviceType != '22' && serviceType != '23') {
								document.getElementById('trDryIce').style.display = "";
							} else {
								document.getElementById('trDryIce').style.display = "none";
								document.getElementById('trDryIce2').style.display = "none";
								document.getElementById('chkDryIce').checked = "";
							} if (options.search("5") != '-1') {
								if (serviceType != '10' && serviceType != '7' && serviceType != '21' && serviceType != '6' && serviceType != '15' && serviceType != '22' && serviceType != '23') {
									document.getElementById('trDangerousGoods').style.display = "";
								} else {
									if (serviceType == '10') {
										if (FindControl('hdnInternationalFirstDGAllowed').value == 'true') {
											document.getElementById('trDangerousGoods').style.display = "";
										} else {
											document.getElementById('trDangerousGoods').style.display = "none";
											document.getElementById('trDangerousGoodsType').style.display = "none";
											document.getElementById('chkDangerousGoods').checked = "";
										}
									} else if (serviceType == '7') {
										if (FindControl('hdnFirstOvernightDGAllowed').value == 'true') {
											document.getElementById('trDangerousGoods').style.display = "";
										} else {
											document.getElementById('trDangerousGoods').style.display = "none";
											document.getElementById('trDangerousGoodsType').style.display = "none";
											document.getElementById('chkDangerousGoods').checked = "";
										}
									} else if (serviceType == '21') {
										if (FindControl('hdnFirstOvernightFreightDGAllowed').value == 'true') {
											document.getElementById('trDangerousGoods').style.display = "";
										} else {
											document.getElementById('trDangerousGoods').style.display = "none";
											document.getElementById('trDangerousGoodsType').style.display = "none";
											document.getElementById('chkDangerousGoods').checked = "";
										}
									} else {
										document.getElementById('trDangerousGoods').style.display = "none";
										document.getElementById('trDangerousGoodsType').style.display = "none";
										document.getElementById('chkDangerousGoods').checked = "";
									}
								}
							} else {
								document.getElementById('trDangerousGoods').style.display = "none";
								document.getElementById('trDangerousGoodsType').style.display = "none";
								document.getElementById('chkDangerousGoods').checked = "";
							} if (options.search("6") != '-1' && (serviceType == '-1' || serviceType == '6')) {
								var noOfPackages = GetPackageCount();;
								if (noOfPackages <= 1) {
									document.getElementById('trHazardousMaterials').style.display = "";
								} else {
									document.getElementById('trHazardousMaterials').style.display = "none";
									document.getElementById('chkHazardousMaterials').checked = "";
								}
							} else {
								document.getElementById('trHazardousMaterials').style.display = "none";
								document.getElementById('chkHazardousMaterials').checked = "";
							} if (options.search("7") != '-1' && (serviceType == '-1' || serviceType == '1' || serviceType == '3' || serviceType == '7' || serviceType == '13' || serviceType == '14' || serviceType == '22')) {
								var originCntryCode = getOriginCntryCode();
								var destinationCntryCode = getDestinationCntryCode();
								if (isCntryBRorMXorCO(originCntryCode) && isOriginSameAsRecipient(originCntryCode, destinationCntryCode)) {
									document.getElementById('trDeliveryOnInvoiceDetail').style.display = "";
								} else {
									document.getElementById('trDeliveryOnInvoiceDetail').style.display = "none";
									document.getElementById('chkDeliveryOnInvoiceDetail').checked = "";
								}
							} else {
								document.getElementById('trDeliveryOnInvoiceDetail').style.display = "none";
								document.getElementById('chkDeliveryOnInvoiceDetail').checked = "";
							}
							CheckSignatureOptions();
							CheckHomeDeliveryPremium();
							CheckDryIce();
							CheckDangerousGoods();
							CheckHazardousMaterials();
						}
					}
				}
			}

			function SetPickupDropoffOptions(showDropBox) {
				var ddlDropoffType = FindControl('ddlDropoffType');
				if ( !! ddlDropoffType) {
					if (showDropBox) {
						var dropBoxOptions = {
							2: 'Drop box',
							3: 'Business service center',
							4: 'FedEx station'
						};
						ddlDropoffType.options.length = 3;
						for (index in dropBoxOptions) {
							ddlDropoffType.options[ddlDropoffType.options.length] = new Option(dropBoxOptions[index], index);
						}
					} else {
						var dropBoxOptions = {
							3: 'Business service center',
							4: 'FedEx station'
						};
						ddlDropoffType.options.length = 3;
						for (index in dropBoxOptions) {
							ddlDropoffType.options[ddlDropoffType.options.length] = new Option(dropBoxOptions[index], index);
						}
					}
					ChangeDdlSelectedIndex('ddlDropoffType', '-1');
				}
			}

			function CheckSignatureOptions() {
				if (document.getElementById('chkSignatureOptions').checked) {
					document.getElementById('trSignatureOptionType').style.display = "";
				} else {
					document.getElementById('trSignatureOptionType').style.display = "none";
				}
			}

			function CheckHomeDeliveryPremium() {
				if (document.getElementById('chkHomeDeliveryPremium').checked) {
					document.getElementById('trHomeDeliveryPremiumType').style.display = "";
				} else {
					document.getElementById('trHomeDeliveryPremiumType').style.display = "none";
				}
			}

			function CheckDryIce() {
				if (document.getElementById('chkDryIce').checked) {
					var ddlServiceType = FindControl('ddlServiceType');
					var serviceType = ddlServiceType.value;
					if (!(serviceType == '6' || serviceType == '15')) {
						document.getElementById('trDryIce2').style.display = "";
					} else {
						document.getElementById('trDryIce2').style.display = "none";
					}
				} else {
					document.getElementById('trDryIce2').style.display = "none";
				}
			}

			function CheckDangerousGoods() {
				if (document.getElementById('chkDangerousGoods').checked) {
					if (document.getElementById('chkHazardousMaterials').checked) {
						document.getElementById('chkHazardousMaterials').checked = "";
					}
					document.getElementById('trDangerousGoodsType').style.display = "";
				} else {
					document.getElementById('trDangerousGoodsType').style.display = "none";
				}
			}

			function CheckHazardousMaterials() {
				if (document.getElementById('chkHazardousMaterials').checked) {
					document.getElementById('trDangerousGoodsType').style.display = "none";
					document.getElementById('chkDangerousGoods').checked = "";
				}
			}

			function CheckDimensions(obj) {
				if (obj.value == 'L' || obj.value == 'W' || obj.value == 'H') obj.value = '';
			}

			function GetPackageCount() {
				var noOfPackages = FindControl('noOfPackages');
				var obj;
				if (!noOfPackages) {
					var hdnNoOfPackages = FindControl('hdnNoOfPackages');
					obj = hdnNoOfPackages.value;
				} else {
					obj = noOfPackages.value;
				}
				return obj;
			}

			function EnableDisablePackages() {
				var isIdentical = document.getElementById('isIdentical').value;
				var trIdenticalPackages = FindControl('identicalPackages');
				var obj = GetPackageCount();
				var isPackageDetailsUserEntry = IsPackageDetailsUserEntry();
				if ( !! trIdenticalPackages) {
					if (obj == '1' || obj == '-1') {
						Hide('identicalPackages');
					} else {
						Show('identicalPackages');
					}
				}
				if (isPackageDetailsUserEntry == 'true') {
					document.getElementById('chkPackage1Type').style.display = "";
					UncheckPackageCheckboxes();
				}
				if (obj == '-1') {
					Hide('trPackage1');
					Hide('trPackage2');
					Hide('trPackage3');
					Hide('trPackage4');
					Hide('trPackage5');
				} else if (obj == '1' || isIdentical == '1') {
					Show('trPackage1');
					Hide('trPackage2');
					Hide('trPackage3');
					Hide('trPackage4');
					Hide('trPackage5');
					if (isPackageDetailsUserEntry == 'true') {
						document.getElementById('chkPackage1Type').style.display = "none";
						if (obj == '1' && isIdentical == '0') {
							document.getElementById('chkPackage1Type').checked = true;
						}
					}
				} else if (obj == '2') {
					Show('trPackage1');
					Show('trPackage2');
					Hide('trPackage3');
					Hide('trPackage4');
					Hide('trPackage5');
				} else if (obj == '3') {
					Show('trPackage1');
					Show('trPackage2');
					Show('trPackage3');
					Hide('trPackage4');
					Hide('trPackage5');
				} else if (obj == '4') {
					Show('trPackage1');
					Show('trPackage2');
					Show('trPackage3');
					Show('trPackage4');
					Hide('trPackage5');
				} else if (obj == '5') {
					Show('trPackage1');
					Show('trPackage2');
					Show('trPackage3');
					Show('trPackage4');
					Show('trPackage5');
				}
				HideDimensions();
				ShowDimensions();
				ActivatePackage();
				SetSpecialServices();
			}

			function ChangePackageCount(value) {
				document.getElementById('trPackage5').style.display = "none";
				document.getElementById('trPackage4').style.display = "none";
				document.getElementById('trPackage3').style.display = "none";
				document.getElementById('trPackage2').style.display = "none";
				document.getElementById('trPackage1').style.display = "none";
				switch (value) {
				case 5:
					document.getElementById('trPackage5').style.display = "";
				case 4:
					document.getElementById('trPackage4').style.display = "";
				case 3:
					document.getElementById('trPackage3').style.display = "";
				case 2:
					document.getElementById('trPackage2').style.display = "";
				case 1:
					document.getElementById('trPackage1').style.display = "";
				}
			}

			function getOriginCntryCode() {
				var originCntryCode = 'MX';
				var ddlCountry = document.getElementById('ddlCountry');
				if (originCntryCode != 'null') {
					return originCntryCode;
				} else if ( !! ddlCountry) {
					return ddlCountry.value
				} else {
					return null;
				}
			}

			function getDestinationCntryCode() {
				var ddlDestinationCountry = document.getElementById('ddlDestinationCountry');
				if ( !! ddlDestinationCountry) {
					return ddlDestinationCountry.value;
				} else {
					var destCntry = null;
					var destCntryList = 'null';
					if (destCntryList != null) {
						var destCntryArr = destCntryList.split(",");
						if (destCntryArr.length > 0) destCntry = destCntryArr[0];
					}
					return destCntry;
				}
			}

			function isOriginSameAsRecipient(originCntry, recipientCntry) {
				return (originCntry != null && recipientCntry != null && originCntry == recipientCntry);
			}

			function isCntryBRorMXorCO(cntry) {
				return (cntry != null && (cntry == "BR" || cntry == "MX" || cntry == "CO"));
			}
		</script>

	<!--
	888      888                  888
	888      888                  888
	888      888                  888
	88888b.  888888 88888b.d88b.  888
	888 "88b 888    888 "888 "88b 888
	888  888 888    888  888  888 888
	888  888 Y88b.  888  888  888 888
	888  888  "Y888 888  888  888 888
	-->

	<!-- select#ddlCurrencyType : Tipo de Moneda -->
	</head>
	<body onload="ShowHideTable()" >
		<form name='mainForm' method='post' action='https://www.fedex.com/FWIW/Client/Rating_v8/ClientRatingInit' id='mainForm' target='testiFrame'>
			<table width='100%' border='0'>
				<tr>
					<td align='left'>
						<center>
							<table border='0' cellpadding='0' cellspacing='0' width='713px'	style='text-align: left;'>

								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td>
													<!-- begin tblOrigin -->
													<table border='0' cellpadding='5' cellspacing='0'										style='font-family:Helvetica; text-align: left; color:Black; background-color:White; font-size:11px;border:White 1px solid;'										width='100%'>
														<tr>
															<td class="PanelHeader" colspan="3" align="left" style='background-color:White; color:DimGray'>From </td>
														</tr>
														<!-- begin trOriginCountryCode -->
														<tr id="trOriginCountryCode">
															<td >&nbsp;*Country</td>
															<td >
																<select name='ddlCountry'														id='ddlCountry' class="dropdown" onChange="SetStateVisibility()"														style='width:155px; background-color:White; font-family:Helvetica; font-size:11px; color:Black;'>
																	<option value='-1'>Select</option>
																	<!-- begin ddlCountrySmartPostOnlyRemovalBeforeUSA -->
																	<option value="AF">Afghanistan</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AG">Antigua/Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia</option>
																	<option value="BA">Bosnia-Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BR">Brazil</option>
																	<option value="VG">British Virgin Islands</option>
																	<option value="BN">Brunei</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="BQ">Caribbean Netherlands</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CO">Colombia</option>
																	<option value="CG">Congo Brazzaville</option>
																	<option value="CD">Congo Democratic Rep. of</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="HR">Croatia</option>
																	<option value="CW">Curacao</option>
																	<option value="CY">Cyprus</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="TL">East Timor</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FO">Faeroe Islands</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="GF">French Guiana</option>
																	<option value="PF">French Polynesia</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GP">Guadeloupe</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GN">Guinea</option>
																	<option value="GY">Guyana</option>
																	<option value="HT">Haiti</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="CI">Ivory Coast</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Laos</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macau</option>
																	<option value="MK">Macedonia</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia</option>
																	<option value="MD">Moldova</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="NA">Namibia</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NC">New Caledonia</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestine Autonomous</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RE">Reunion</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="MP">Saipan</option>
																	<option value="WS">Samoa</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SG">Singapore</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="ZA">South Africa</option>
																	<option value="KR">South Korea</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="KN">St. Kitts/Nevis</option>
																	<option value="LC">St. Lucia</option>
																	<option value="SX">St. Maarten</option>
																	<option value="MF">St. Martin</option>
																	<option value="VC">St. Vincent</option>
																	<option value="SR">Suriname</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syria</option>
																	<option value="TW">Taiwan</option>
																	<option value="TZ">Tanzania</option>
																	<option value="TH">Thailand</option>
																	<option value="TG">Togo</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad/Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks &amp; Caicos Islands</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="VI">U.S. Virgin Islands</option>
																	<!-- end ddlCountrySmartPostOnlyRemovalBeforeUSA -->
																	<option value="US">U.S.A.</option>
																	<!-- begin ddlCountrySmartPostOnlyRemovalAfterUSA -->
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela</option>
																	<option value="VN">Vietnam</option>
																	<option value="WF">Wallis &amp; Futuna</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																	<!-- end ddlCountrySmartPostOnlyRemovalAfterUSA -->
																</select>
															</td>
															<td width="300px"></td>
														</tr>
														<!-- end trOriginCountryCode -->										  										   <!-- end trOriginCity -->										  										   <!-- end trOriginStateOrProvinceCode -->										  										   <!-- end trOriginPostalCode -->										  										  <!-- begin trCurrencyType -->
														<tr id="trCurrencyType">
															<td  >&nbsp;Currency type</td>
															<td >
																<select												name="ddlCurrencyType" id="ddlCurrencyType" class="dropdown" onChange="ChangeCurrencyType(this.options[this.selectedIndex].text)"												style="width: 160px; background-color:White; font-family:Helvetica; font-size:11px; color:Black;" >
																	<option value="-1">Select</option>
																	<option value="ARN">Argentina Pesos</option>
																	<option value="AWG">Aruba Guilders</option>
																	<option value="AUD">Australia Dollars</option>
																	<option value="BSD">Bahamas Dollars</option>
																	<option value="BHD">Bahrain Dinars</option>
																	<option value="BBD">Barbados Dollars</option>
																	<option value="BMD">Bermuda Dollars</option>
																	<option value="BRL">Brazil Reais</option>
																	<option value="BND">Brunei Dollars</option>
																	<option value="CAD">Canada Dollars</option>
																	<option value="CID">Cayman Islands Dollars</option>
																	<option value="CHP">Chile Pesos</option>
																	<option value="CNY">China Renminbi</option>
																	<option value="COP">Colombia Pesos</option>
																	<option value="CRC">Costa Rica Colones</option>
																	<option value="CZK">Czech Republic Koruny</option>
																	<option value="DKK">Denmark Kroner</option>
																	<option value="RDD">Dominican Republic Pesos</option>
																	<option value="ECD">E. Caribbean Dollars</option>
																	<option value="EGP">Egypt Pounds</option>
																	<option value="EUR">Euro</option>
																	<option value="GTQ">Guatemala Quetzales</option>
																	<option value="HKD">Hong Kong Dollars</option>
																	<option value="HUF">Hungary Forint</option>
																	<option value="INR">India Rupees</option>
																	<option value="ILS">Israel Shekels</option>
																	<option value="JAD">Jamaica Dollars</option>
																	<option value="JYE">Japan Yen</option>
																	<option value="KZT">Kazakhstan Tenge</option>
																	<option value="KES">Kenya Shillings</option>
																	<option value="KUD">Kuwait Dinars</option>
																	<option value="LVL">Latvia Lati</option>
																	<option value="LTL">Lithuania Litai</option>
																	<option value="MOP">Macau Patacas</option>
																	<option value="MYR">Malaysia Ringgits</option>
																	<option value="NMP">Mexico New Pesos</option>
																	<option value="ANG">Netherlands Antilles Guilders</option>
																	<option value="NZD">New Zealand Dollars</option>
																	<option value="NOK">Norway Kroner</option>
																	<option value="PKR">Pakistan Rupees</option>
																	<option value="PAB">Panama Balboas</option>
																	<option value="PHP">Philippines Pesos</option>
																	<option value="PLN">Poland Zloty</option>
																	<option value="RUR">Russia Rouble</option>
																	<option value="SAR">Saudi Arabia Riyals</option>
																	<option value="SID">Singapore Dollars</option>
																	<option value="ZAR">South Africa Rand</option>
																	<option value="WON">South Korea Won</option>
																	<option value="SEK">Sweden Kronor</option>
																	<option value="SFR">Switzerland Francs</option>
																	<option value="NTD">Taiwan New Dollars</option>
																	<option value="THB">Thailand Baht</option>
																	<option value="TTD">Trinidad &amp; Tobago Dollars</option>
																	<option value="TRY">Turkey New Lira</option>
																	<option value="DHS">UAE Dirhams</option>
																	<option value="UGX">Uganda Shillings</option>
																	<option value="UKL">United Kingdom Pounds</option>
																	<option value="USD">United States Dollars</option>
																	<option value="UYP">Uruguay New Pesos</option>
																	<option value="VEF">Venezuela Bolivares Fuertes</option>
																	<option value="WST">Western Samoa Tala</option>
																</select>
															</td>
															<td>&nbsp;</td>
														</tr>
														<!-- end trCurrencyType -->
													</table>
													<!-- end tblOrigin -->																		<br/>																	  <!-- begin tblDestination -->
													<table border='0' cellpadding='5' cellspacing='0'										style='font-family:Helvetica; text-align: left; color:Black; background-color:White; font-size:11px;border:White 1px solid;'										width='100%'>
														<tr>
															<td class="PanelHeader" colspan="3" align="left" style='background-color:White; color:DimGray'>To </td>
														</tr>
														<!-- begin trDestinationCountryCode -->
														<tr id="trDestinationCountryCode">
															<td class="formFieldTitle">&nbsp;*<?php _e('País', 'alias'); ?></td>
															<td >
																<select name='ddlDestinationCountry'														id='ddlDestinationCountry' class="dropdown" onChange="SetDestinationVisibility()"														style='width:155px; background-color:White; font-family:Helvetica; font-size:11px; color:Black;'>
																	<option value="-1"><?php _e('Selecciona tu país', 'alias'); ?></option>
																	<option value="AF">Afghanistan</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AG">Antigua/Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia</option>
																	<option value="BA">Bosnia-Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BR">Brazil</option>
																	<option value="VG">British Virgin Islands</option>
																	<option value="BN">Brunei</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="BQ">Caribbean Netherlands</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CO">Colombia</option>
																	<option value="CG">Congo Brazzaville</option>
																	<option value="CD">Congo Democratic Rep. of</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="HR">Croatia</option>
																	<option value="CW">Curacao</option>
																	<option value="CY">Cyprus</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="TL">East Timor</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FO">Faeroe Islands</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="GF">French Guiana</option>
																	<option value="PF">French Polynesia</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GP">Guadeloupe</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GN">Guinea</option>
																	<option value="GY">Guyana</option>
																	<option value="HT">Haiti</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="CI">Ivory Coast</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Laos</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macau</option>
																	<option value="MK">Macedonia</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia</option>
																	<option value="MD">Moldova</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="NA">Namibia</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NC">New Caledonia</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestine Autonomous</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RE">Reunion</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="MP">Saipan</option>
																	<option value="WS">Samoa</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SG">Singapore</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="ZA">South Africa</option>
																	<option value="KR">South Korea</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="KN">St. Kitts/Nevis</option>
																	<option value="LC">St. Lucia</option>
																	<option value="SX">St. Maarten</option>
																	<option value="MF">St. Martin</option>
																	<option value="VC">St. Vincent</option>
																	<option value="SR">Suriname</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syria</option>
																	<option value="TW">Taiwan</option>
																	<option value="TZ">Tanzania</option>
																	<option value="TH">Thailand</option>
																	<option value="TG">Togo</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad/Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks &amp; Caicos Islands</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="VI">U.S. Virgin Islands</option>
																	<option value="US">U.S.A.</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela</option>
																	<option value="VN">Vietnam</option>
																	<option value="WF">Wallis &amp; Futuna</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select>
															</td>
															<td width="300px"></td>
														</tr>
														<!-- end trDestinationCountryCode -->										  										  <!-- begin trDestinationCity -->
														<tr id="trDestinationCity">
															<td class="formFieldTitle">&nbsp;&nbsp;City</td>
															<td ><input name='txtDestinationCity' maxlength='35' id='txtDestinationCity' style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" type="text"  /></td>
															<td>&nbsp;</td>
														</tr>
														<!-- end trDestinationCity -->										  										   <!-- end trDestinationState -->										  										   <!-- end trDestinationProvince -->										  										  <!-- begin trDestinationPostalCode -->
														<tr id="trDestinationPostalCode">
															<td class="formFieldTitle">&nbsp;*<?php _e('Código Postal', 'alias'); ?></td>
															<td ><input name='txtDestinationPostalCode' maxlength='16' id='txtDestinationPostalCode' style="width:110px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" type="text"   /></td>
															<td>&nbsp;</td>
														</tr>
														<!-- end trDestinationPostalCode -->										  										   <!-- end trDestinationResidential -->
													</table>
													<!-- end tblDestination -->								  								  <br/>								  <!-- begin tblPackageInfo -->
													<table border='0' cellpadding='5' cellspacing='0'										style='font-family:Helvetica; text-align: left; color:Black; background-color:White; font-size:11px;border:White 1px solid;'										width='100%'>
														<tr>
															<td class="PanelHeader" colspan="3" align="left" style='background-color:White; color:DimGray'>Package Information </td>
														</tr>
														<!-- end trPackagesCount -->										 										  	 <!-- end identicalPackages -->											<input type='hidden' name='isIdentical' id='isIdentical' value='0'/>										  										  <!-- begin trPackageInfo -->
														<tr id="trPackageInfo">
															<td colspan="3" align="left">
																<br /> &nbsp;&nbsp;Enter individual package information.
																<table border="1" cellpadding="2" cellspacing="0"  align="center" width="685px" >
																	<tr>
																		<td width="35px">&nbsp; </td>
																		<td width="65px">&nbsp;*Quantity</td>
																		<td>&nbsp;*Weight<br />(per package)</td>
																		<td>&nbsp;Package type</td>
																		<td id="dimensionTitle">&nbsp;Dimensions<br />(per package)</td>
																		<!-- begin tdDeclaredValueHeading -->
																		<td>&nbsp;Declared value											 	<img src="https://www.fedex.com/FWIW/Client/Images/Common/appModuleHelpIcon.gif" align="middle" width="14" height="14" title="The declared value of any package represents FedEx's maximum liability in connection with a shipment of that package.  A declared value greater than $100 will incur additional charges.  If you intend to purchase insurance from a third party and do not want to declare a value for carriage, please enter a value of 0." />											 	<br/>(per package)											 </td>
																		<!-- end tdDeclaredValueHeading -->
																	</tr>
																	<!-- begin trPackage1 -->
																	<tr id="trPackage1" style="display: none">
																		<td>
																			&nbsp;<!-- begin chkPackage1Type -->											       <input type="checkbox" name="chkPackage1Type" id="chkPackage1Type" onClick="ActivatePackage()" />											 	   <!-- end chkPackage1Type -->
																		</td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  name="txtQuantity1" onChange="SummarizeQuantity();" id="txtQuantity1" type="text" maxlength="1" /></td>
																		<td>
																			<input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  name="txtWeight1" onChange="SummarizeWeight()" id="txtWeight1" type="text"  maxlength="5"  />											     <input  style="display:none; width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly  type="text"  name="txtWeightUnit1" id="txtWeightUnit1" value="" />
																			<select name='ddlPackagesWeightUnit1'													id='ddlPackagesWeightUnit1' class="dropdown" onchange="ChangeWeightUnit(this.value)"													style='width:50px;background-color:White; font-family:Helvetica; font-size:11px; color:Black;'>
																				<option value='-1' selected>Select</option>
																				<option value='1'>lbs</option>
																				<option value='0'>kg</option>
																			</select>
																		</td>
																		<td>
																			<!-- end ddlPackagingType1 -->																							 	<!-- begin txtPackagingType1 -->											 											 													<input  style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtPackagingType1" id="txtPackagingType1" value="Your Packaging" />												 											 	<!-- end txtPackagingType1 -->
																		</td>
																		<td >
																			<!-- begin Dimensions1 -->											 	 <input style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsLength1" id="txtDimensionsLength1" onclick="CheckDimensions(this)" value="L"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text"  name="txtDimensionsWidth1" id="txtDimensionsWidth1" value="W" onclick="CheckDimensions(this)" maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text"  name="txtDimensionsHeight1" id="txtDimensionsHeight1" value="H" onclick="CheckDimensions(this)" maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" type="text" name="txtDimensionsUnit1" readonly id="txtDimensionsUnit1" value="" />
																			<select name='ddlDimensionsUnit1'													id='ddlDimensionsUnit1' class="dropdown" onChange="ChangeDimensionsUnit(this.value)"													style='display:none; width:50x; background-color:White; font-family:Helvetica; font-size:11px; color:Black;'>
																				<option value='-1' selected>Select</option>
																				<option value='IN'>in</option>
																				<option value='CM'>cm</option>
																			</select>
																			<!-- end Dimensions1 -->																								 <!-- end ddlPackage1 -->
																		</td>
																		<!-- begin tdDeclaredValue1 -->
																		<td><input  style="width:120px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black; "  type="text" onChange="SummarizeDeclaredValue()" name="txtValue1" id="txtValue1" maxlength="10" /></td>
																		<!-- end tdDeclaredValue1 -->
																	</tr>
																	<!-- end trPackage1 -->										 										 <!-- begin trPackage2 -->
																	<tr id="trPackage2" style="display: none">
																		<td> &nbsp;&nbsp;<input type="checkbox" name="chkPackage2Type" id="chkPackage2Type" onClick="ActivatePackage()" /></td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeQuantity();"  name="txtQuantity2" id="txtQuantity2" maxlength="1"/></td>
																		<td><input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeWeight()" name="txtWeight2" id="txtWeight2"  maxlength="5" />											 	<input  style=" width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly  type="text"  name="txtWeightUnit2" id="txtWeightUnit2" value="" />												 </td>
																		<td><input  style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtPackagingType2" id="txtPackagingType2" value="Your Packaging" /></td>
																		<td>
																			<!-- begin Dimensions2 -->											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsLength2" id="txtDimensionsLength2"  value="L" onclick="CheckDimensions(this)"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsWidth2" id="txtDimensionsWidth2" value="W" onclick="CheckDimensions(this)"   maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsHeight2" id="txtDimensionsHeight2" value="H" onclick="CheckDimensions(this)"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" type="text" name="txtDimensionsUnit2" readonly id="txtDimensionsUnit2" value="" />												<!-- end Dimensions2 -->																								 <!-- end ddlPackage2 -->
																		</td>
																		<!-- begin tdDeclaredValue2 -->
																		<td><input  style="width:120px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" name="txtValue2" onChange="SummarizeDeclaredValue();" id="txtValue2" type="text"  maxlength="10" /></td>
																		<!-- end tdDeclaredValue2 -->
																	</tr>
																	<!-- end trPackage2 -->										 										 <!-- begin trPackage3 -->
																	<tr id="trPackage3" style="display: none">
																		<td> &nbsp;&nbsp;<input type="checkbox" name="chkPackage3Type" id="chkPackage3Type" onClick="ActivatePackage()" /></td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text"  name="txtQuantity3" onChange="SummarizeQuantity();" id="txtQuantity3" maxlength="1"/></td>
																		<td><input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeWeight()"  name="txtWeight3" id="txtWeight3" maxlength="5"/>											 	<input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  readonly type="text"  name="txtWeightUnit3" id="txtWeightUnit3" value="" />												 </td>
																		<td><input  style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtPackagingType3" id="txtPackagingType3" value="Your Packaging" /></td>
																		<td>
																			<!-- begin Dimensions3 -->											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsLength3" id="txtDimensionsLength3"  value="L" onclick="CheckDimensions(this)"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsWidth3" id="txtDimensionsWidth3" value="W" onclick="CheckDimensions(this)"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsHeight3" id="txtDimensionsHeight3" value="H" onclick="CheckDimensions(this)"  maxlength="5"/>											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtDimensionsUnit3" id="txtDimensionsUnit3" value="" />												 <!-- end Dimensions3 -->												 												 <!-- end ddlPackage3 -->
																		</td>
																		<!-- begin tdDeclaredValue3 -->
																		<td><input  style="width:120px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" name="txtValue3"  onChange="SummarizeDeclaredValue();" id="txtValue3" type="text" maxlength="10"  /></td>
																		<!-- end tdDeclaredValue3 -->
																	</tr>
																	<!-- end trPackage3 -->										 										 <!-- begin trPackage4 -->
																	<tr id="trPackage4" style="display: none">
																		<td> &nbsp;&nbsp;<input type="checkbox" name="chkPackage4Type" id="chkPackage4Type" onClick="ActivatePackage()" /></td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeQuantity();" name="txtQuantity4" id="txtQuantity4" maxlength="1"/></td>
																		<td><input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeWeight()" name="txtWeight4" id="txtWeight4" maxlength="5"/>											 	<input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text"  name="txtWeightUnit4" id="txtWeightUnit4" value="" />												 </td>
																		<td><input  style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtPackagingType4" id="txtPackagingType4" value="Your Packaging" /></td>
																		<td>
																			<!-- begin Dimensions4 -->											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsLength4" id="txtDimensionsLength4"  value="L" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsWidth4" id="txtDimensionsWidth4" value="W" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsHeight4" id="txtDimensionsHeight4" value="H" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtDimensionsUnit4" id="txtDimensionsUnit4" value="" />												 <!-- end Dimensions4 -->												 												 <!-- end ddlPackage4 -->
																		</td>
																		<!-- begin tdDeclaredValue4 -->
																		<td><input  style="width:120px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" name="txtValue4" onChange="SummarizeDeclaredValue();" id="txtValue4" type="text"  maxlength="10" /></td>
																		<!-- end tdDeclaredValue4 -->
																	</tr>
																	<!-- end trPackage4 -->										 										 <!-- begin trPackage5 -->
																	<tr id="trPackage5" style="display: none">
																		<td> &nbsp;&nbsp;<input type="checkbox" name="chkPackage5Type" id="chkPackage5Type" onClick="ActivatePackage()" /></td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeQuantity();" name="txtQuantity5" id="txtQuantity5" maxlength="1" /></td>
																		<td><input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" onChange="SummarizeWeight()" name="txtWeight5" id="txtWeight5"  maxlength="5" />											 	<input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text"  name="txtWeightUnit5" id="txtWeightUnit5" value="" />												 </td>
																		<td><input  style="width:150px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtPackagingType5" id="txtPackagingType5" value="Your Packaging" /></td>
																		<td>
																			<!-- begin Dimensions5 -->											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsLength5" id="txtDimensionsLength5"  value="L" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsWidth5" id="txtDimensionsWidth5" value="W" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  type="text" name="txtDimensionsHeight5" id="txtDimensionsHeight5" value="H" onclick="CheckDimensions(this)"  maxlength="5" />											 	 <input  style="display:none; width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  readonly type="text" name="txtDimensionsUnit5" id="txtDimensionsUnit5" value="" />												 <!-- end Dimensions5 -->												 												 <!-- end ddlPackage5 -->
																		</td>
																		<!-- begin tdDeclaredValue5 -->
																		<td><input  style="width:120px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" name="txtValue5" onChange="SummarizeDeclaredValue();" id="txtValue5" type="text"  maxlength="10" /></td>
																		<!-- end tdDeclaredValue5 -->
																	</tr>
																	<!-- end trPackage5 -->
																	<tr>
																		<td align="center"><input type='hidden' name='dimensionType' value='$dimensionType$'/> Total </td>
																		<td><input  style="width:25px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black; " readonly type="text" value="0" name="txtPackagePieceCount" id="txtPackagePieceCount"  /></td>
																		<td><input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" value="0.0" name="txtTotalWeight" id="txtTotalWeight"  />											     <input  style="width:30px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtTotalWeightUnit" id="txtTotalWeightUnit" value="" />																						 </td>
																		<td>&nbsp;  </td>
																		<td >&nbsp;</td>
																		<!-- begin tdDeclaredValueTotal -->
																		<td><input  style="width:60px; border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;" readonly type="text" name="txtTotalValue" value="0.00" id="txtTotalValue" /><br><input name="txtCurrency" id="txtCurrency" style="width:160px;  border-color:DimGray; background-color:White; border-width:1px; border-style:solid; font-family:Helvetica; font-size:11px; color:Black;"  readonly type="text"/>											 </td>
																		<!-- end tdDeclaredValueTotal -->
																	</tr>
																</table>
															</td>
														</tr>
														<!-- end trPackageInfo -->										 										 										  <!-- begin tblServices -->
														<tr id="tblServices">
															<td  >&nbsp; Service type</td>
															<td >
																<select name='ddlServiceType'														id='ddlServiceType' class="dropdown" onChange="SetSpecialServices()"														style='width: 220px; background-color:White; font-family:Helvetica; font-size:11px; color:Black;'>
																	<option value="-1">All service types</option>
																	<option value='7'>FedEx First Overnight&#174</option>
																	<option value='13'>FedEx Priority Overnight&#174</option>
																	<option value='14'>FedEx Standard Overnight&#174</option>
																	<option value='22'>FedEx Economy&#174</option>
																	<option value='10'>FedEx International First&#174</option>
																	<option value='0'>FedEx Europe First&#8482</option>
																	<option value='11'>FedEx International Priority&#174</option>
																	<option value='8'>FedEx International Economy&#174</option>
																	<option value='1'>FedEx 1Day&#174 Freight</option>
																	<option value='3'>FedEx 2Day&#174 Freight</option>
																	<option value='12'>FedEx International Priority&#174 Freight</option>
																	<option value='9'>FedEx International Economy&#174 Freight</option>
																</select>
															</td>
															<td>&nbsp;</td>
														</tr>
														<!-- end tblServices -->										  										   <!-- end tblHubID -->										  										   <!-- end tblDropoffType -->									  										   <!-- end trShipDate -->
													</table>
													<!-- end tblPackageInfo -->								  								  <br/>								   <!-- end tblSpecialServices -->                                                                  <br/>
													<table id='tblGetRates' border='0' cellpadding='0' cellspacing='0' width='100%px'>
														<tr>
															<td ><input type='hidden' name='query'	value='38njBy9sCTRTvvTtS7gcd/IXVJJB71Q2fKoK8tKAT28KvePyBu5HN4txAyY6UArtoJHJMxnl2T6aWv5OvBW3J9RhIB8pzRn9eRUqzh9d6Q/zJZ2NOgQ0fxIX3cuYr7/WpSxfSyyIDEy9uSE+drQwEa0siqRpfTrhr12WqLguiUe4mxPA+2tpdUeauUI2FVQ/P66UmHu5nRf/qxX0hsP7fu3Z5wKYGhe3a7k7L3QDOJ3RRxj27dOTGrUpwWIkR4533JyZB2bRiXlOIbAxJ+EGIZhuCUI6r6T+kBrOv2E7oHCUVZN4KPhlvyMEhJOLm8mpNSKn3rs+H0UnBQthQINMNd+5bNvyFj/P7DBa4daUfwpyJILqMJJsfYni3GNC/OLQ+iJcMoW/tbGzDbDtjyeuJc3AV7iiQyBnlg1E6ye7K3PHInKlCJyNwqay3qBgiRCYbwvfDdIy6GBArJ8fzXnk/C63RtWH591o+yTlbzuHrm9HbztEcHH0yrsrXcOTzG+Z7MYCyk7qLHQD86VNBgE7uRynaf8nynoBS9J2Y4UlUCN0Ksr6m+7em1zbyxqCJpTbvBqaI1vglSiyO9/GU/5qU+dtISs8RYDf9bjl84f3AtMmCuQTZqHMR/qlkASYEaDbYewG/dmaCfQud9nYH6+ACuSu3Ey0xt9+3/FEIZRQrx12AaS/ibCOmcwtRZ0SHBlfaGivcb9pvuLutmPAuHddCB4Ac2xjc9PYV7kloQK3rYQJFGP1o7oQEzaBrlCRIQwx0C9/e4g4nvA35FI9La5GU9iPg5FDklhjfu/BZ7OM9TU80jLREv9XVjQf83+xvw85dgJ+MIpPLQCNbYULONvM1LaSbK9PadTcQH4rm8DL92511alhTlLO8LzTF5IYM7IDzTgvwRJ3DJmjgfnf+p2Ke+U9J+cqo8mbiDk6rLhPgCyuNFyXvRHPECGaZx3jnGZUc/TkL6B88MB8S46agprEMcN69e9WXNPD9yun/Hc39I9cyqmmUK4kNJb0Zypcyn165qzhshs2jVxOJXxSgk1Z6S9uP47b4Bzz3ACirUwT/npHFbTLKjs/W8UakbButUeSNvXpjrDaSAFDJmXDBJqlJv2qxdn//VSgtOFtogd+I3gokMyKRw0nThXsvt9tRz3voPP430XiICdmNqDtCHs/3HwV/v2r2Tf2NMIQWmHqaPGaIu2SUZVxaSmSrU3jqgTaRAA2RAfNuAmC7kmdX8RLHq/8Com0KHMolTEAJaeS6s5FdQpEUXujZ+E5Hp0z+KT7G1VP2V9vu3Y+XtnNxSW4HIuq9Z3ECf+v5KxZ+LK7Mu9509krFCLC9SaKw3S8lJ+zpHArl26aQyYIw6v61ahB3NN4C6CPuMqWbgj3pMAveDiqkr9yLJw/3pCUk2ykWFrmrGjSNncJdHM/ZFtgx2xb8QUq/lVCG0398J0hZmpEwrTrh+96usMiAOFd+MFR+VuEkkpJzrmPsl7scGpj/eSDnyikqiivMN6GHdauq40XbjsEbDDIEaEHKVa2Z4AVfqO4BsEu7ly0F5Ba6qwJIvkuKiCHH+1VN6wzXWEl6ud5veCjlnZBRaJWEVFBR/Rkea6C7xnSU0UiwzU9xrWMaaH+N1OTVVhppHCTfllqh7KjWcha+Piic58KbHD0OmKAq8nfv3SPKUP57iDlclNub0QyUFZBFuuAFBQjwgf8zwKryp6Ujbd+XDayvVIlbvbTqTZ3t8t4VkBUVDtQmQnpLbTAODFgu4bE0Q/aVqTp8Kom3Wdity4Jt96Bh27cSK+yCpB4foXHTBMkkAaFQsFC7SA0xUchnYnes44epTbXN0eMj1qKbYjZN9fLYgZMEObceEyh8+VNn626zWk1slLDGwQ44brSC28X0xNEGB0Px6X4S5nAYGJeC9/x07AD8sHheQZkG4Y16Q7UakXyAqkeqltVmATDcayk+Q9/OEaP10GzopVuMUrqYXJnJ4Tf5iMOWp11AEk9AG5HHEdAf39N6Kt3I4rJEg89LnT6nGmtcnb6vKOGhtv55xc6UCoHWbnfi53TBDVsairWJg+OrDc+7JKhCvH0e2ikQsT7GtRBmk/I4emfzTSIBnVQwhjdcG4Q+5dkBWmtwD+6AfCWddyGzOXCXHzmzCNLpNUbzqtRE25S3cjCJPSho9B/vsTfF+mGbjy7w07sztYYhOIRsZ5YWoAwweY8eicBFZv5wogw0eWWufLJlYcVwWAaQ3uKV37sz0f4aSSWqDHXDd3aNdA9ZnX8lhwT3toHmnh/312rQ/MTISZ0XjwmJJUecXAYIU86rxIG7hIUhpdjKagEaU6T2NZU39CSl0sbEArQP9whdZP3cMJZzAEWNz43h8ifwN6YwLFnTKmuafrPWS/P2gBPX/Sdfadx6qkfnXnZrcbLJs+oZ0aPxa8IXyQ28VEGbZAiw5XsajTV2Wh4Dv+ZqQLYcxaMOwyo+o4HtsRwRTSaS2qVxErJKBGNR7Ean5Z/WnncLBbvE6YfzEzPTPf8V7CaU75ixViyCeTSFPbb7MOOALa73TK0tGVqqBEkljEcLLK+N77WEOhUI4ueL/IDol3v/xpt6FhA2/bf84YkEv4N4Yf30r1LPhqgF3yyRo/Ehx8fVpbvyWGMS9zvnrcgDPhzwzc1/iCwyd40dLciHOIJAmdvqBZN91I03XHkv4iO1j+VUgnuDz0aTTyGOOqNhDnSkS/40xAn3Si1Zrs85y3p/L3Wr2qxAeOw+fmiP1hFiCygqbtUBAh7kV1fTNPDqonnmvfK1wiGSFLnHE5ImF8GiuF80BE='/>										 <input name="hdnSpecialServicesOptions" type="hidden" id="hdnSpecialServicesOptions" value='' /></td>
															<td colspan="3" align="right">												<input type="submit" class="Buttons"												value="Get Available Rates" style='border-color:DimGray; border-style:solid; color:Black; background-color:White; border-width:1px; font-family:Helvetica; font-size:11px; height: 25px;'/>											</td>
														</tr>
														<tr>
															<td><input type='hidden' name='hdnNoOfPackages' id='hdnNoOfPackages' value='1'/></td>
															<td><input type='hidden' name='hdnPackageDetailsUserEntry' id='hdnPackageDetailsUserEntry' value='false'/></td>
															<td><input type='hidden' name='hdnPackageWeight1' id='hdnPackageWeight1' value='0.2'/></td>
															<td><input type='hidden' name='hdnPackageWeight2' id='hdnPackageWeight2' value='$hdnPackageWeight2$'/></td>
															<td><input type='hidden' name='hdnPackageWeight3' id='hdnPackageWeight3' value='$hdnPackageWeight3$'/></td>
															<td><input type='hidden' name='hdnPackageWeight4' id='hdnPackageWeight4' value='$hdnPackageWeight4$'/></td>
															<td><input type='hidden' name='hdnPackageWeight5' id='hdnPackageWeight5' value='$hdnPackageWeight5$'/></td>
															<td><input type='hidden' name='hdnShipmentWeightUnit' id='hdnShipmentWeightUnit' value='0'/></td>
															<td><input type='hidden' name='hdnDimensionsLength' id='hdnDimensionsLength' value='30'/></td>
															<td><input type='hidden' name='hdnDimensionsHeight' id='hdnDimensionsHeight' value='5'/></td>
															<td><input type='hidden' name='hdnDimensionsWidth' id='hdnDimensionsWidth' value='30'/></td>
															<td><input type='hidden' name='hdnDimensionsUnits' id='hdnDimensionsUnits' value='CM'/></td>
															<td><input type='hidden' name='hdnPackageDimensions1' id='hdnPackageDimensions1' value='null'/></td>
															<td><input type='hidden' name='hdnPackageDimensions2' id='hdnPackageDimensions2' value='null'/></td>
															<td><input type='hidden' name='hdnPackageDimensions3' id='hdnPackageDimensions3' value='null'/></td>
															<td><input type='hidden' name='hdnPackageDimensions4' id='hdnPackageDimensions4' value='null'/></td>
															<td><input type='hidden' name='hdnPackageDimensions5' id='hdnPackageDimensions5' value='null'/></td>
															<td><input type='hidden' name='hdnFirstOvernightDGAllowed' id='hdnFirstOvernightDGAllowed' value='true'/></td>
															<td><input type='hidden' name='hdnInternationalFirstDGAllowed' id='hdnInternationalFirstDGAllowed' value='true'/></td>
															<td><input type='hidden' name='hdnFirstOvernightFreightDGAllowed' id='hdnFirstOvernightFreightDGAllowed' value='true'/></td>
														</tr>
													</table>
													<br />
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<br />
						</center>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>