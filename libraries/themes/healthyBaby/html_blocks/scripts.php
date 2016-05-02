<script type="text/javascript" charset="utf-8">
  
   var opts = {
    lines: 13, // The number of lines to draw
    length: 10, // The length of each line
    width: 2, // The line thickness
    radius: 9, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#000', // #rgb or #rrggbb
    speed: 2, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: true, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: '100', // Top position relative to parent in px
    left: 'auto' // Left position relative to parent in px
};
function showSpinner() {
var target = document.getElementById('foo');
spinner = new Spinner(opts).spin(target);
}

function stopSpinner() {
spinner.stop();  
}

var data = {
		'BC-mass' : [
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
		
		'BMC' : [
			//Blue Basic
			{'id': '11', 'name': 'Ameda 17070PMW', 'type': 'basic', 'price': '0'},
			{'id': '17', 'name': 'Spectra Dew 350', 'type': 'basic', 'price': '0'},
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'upgrade', 'price': '25.00'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '25.00'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'upgrade', 'price': '25.00'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'upgrade', 'price': '25.00'},
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
	
		'HarvardPilgrim' :[
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
	
		'HealthPlansInc' :[
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
	
		'MassHealt_Stand': [
			//Blue Basic
			{'id': '11', 'name': 'Ameda 17070PMW', 'type': 'basic', 'price': '0'},
			{'id': '17', 'name': 'Spectra Dew 350', 'type': 'basic', 'price': '0'},
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'upgrade', 'price': '25.00'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '25.00'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'upgrade', 'price': '25.00'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'upgrade', 'price': '25.00'},
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
		
		'NHP_Comm':[
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
		
		'NHP_MH':[
			//Blue Basic
			{'id': '11', 'name': 'Ameda 17070PMW', 'type': 'basic', 'price': '0'},
			{'id': '17', 'name': 'Spectra Dew 350', 'type': 'basic', 'price': '0'},
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'upgrade', 'price': '25.00'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '25.00'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'upgrade', 'price': '25.00'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'upgrade', 'price': '25.00'},
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
		
		'TuftsHealth_HMO': [
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
	
		'TuftsHealth_Dir': [
			//Yellow Basic
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'basic', 'price': '0'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '0'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'basic', 'price': '0'},
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		],
	
		'TuftsHealth_Togeth': [
			//Blue Basic
			{'id': '11', 'name': 'Ameda 17070PMW', 'type': 'basic', 'price': '0'},
			{'id': '17', 'name': 'Spectra Dew 350', 'type': 'basic', 'price': '0'},
			{'id': '14', 'name': 'Ardo Calypso Essentials','type': 'basic' , 'price': '0'},
			{'id': '0', 'name': 'Medela® Pump In Style® Advanced Starter Set', 'type': 'basic', 'price': '0'},
			//Upgrade
			{'id': '3', 'name': 'Freemie Freedom Deluxe Set', 'type': 'upgrade', 'price': '25.00'},
			{'id': '16', 'name': 'Spectra S2', 'type': 'basic', 'price': '25.00'},
			{'id': '1', 'name': 'Ameda Purely Yours Ultra','type': 'upgrade', 'price': '25.00'},
			{'id': '13', 'name': 'Lansinoh SignaturePro™ Double Electric Breast Pump with Bag & Accessories', 'type': 'upgrade', 'price': '25.00'},
			{'id': '4', 'name': 'Medela® Pump In Style® On-the-go Tote','type': 'upgrade', 'price': '75.00'},
			{'id': '5', 'name': 'Medela® Pump In Style® Backpack', 'type': 'upgrade', 'price': '75.00'},
			{'id': '6', 'name': 'Medela® Pump In Style® Advanced The Metro Bag™','type': 'upgrade', 'price': '110.00'},
			{'id': '7', 'name': 'Medela® Freestyle® Breast Pump', 'type': 'upgrade', 'price': '145.00'},
			{'id': '15', 'name': 'Ardo Calypso To Go', 'type': 'upgrade', 'price': '110.00'},
			//Accessories
			{'id': '8', 'name': 'Freemie Collection Cups Deluxe Set','type': 'accessory', 'price': '55'},
			{'id': '9', 'name': 'Freemie Connection Kit for Ameda', 'type': 'accessory', 'price': '18'}
		]
	};

  $(document).ready(function(){
  	$("a[rel^='prettyPhoto']").prettyPhoto();
    $("a[rel^='prettyPhoto']").live('click', function(){
		//console.log('pretty clicked');
		$.prettyPhoto.open($(this).attr('href'));
	});
	//$("#ccv").change(function(){
//		if($(this).val() != ''){
//			$("#upgrade_items").show();
//		}else{
//			$("#upgrade_items").hide();
//		}
//	});
	function imgName(name){
		var img = name.replace(/[^\w\s]/gi, '').replace(/\s/g, '-');
		return img;
	}
	
	$("#insurance").change(function(){
		var name = $(this).val();
		var basicOut = '<tr>', basicCount = 0;
		var upgradeOut = '<tr>', upgradeCount = 0;
		
		for(var i = 0; i < data[name].length; i++){
			
			if(data[name][i].type == 'basic'){
				basicOut += '<td width="33%" style="vertical-align:text-top;"><a href="#inline-'+data[name][i].id+'" rel="prettyPhoto" ><img src="../_images/products/img/'+imgName(data[name][i].name)+'.jpg" height="100" /></a><br /><input type="radio" name="pump_model" value="'+data[name][i].name+'"/> <a href="#inline-'+data[name][i].id+'" rel="prettyPhoto" >'+data[name][i].name+'</a></td>';
				basicCount++;
				if(basicCount%3 == 0){
					basicOut += '</tr><tr>';
				}
			}
			if(data[name][i].type == 'upgrade'){
			 	upgradeOut +='<td width="33%" style="vertical-align:text-top"><a href="#inline-'+data[name][i].id+'" rel="prettyPhoto" ><img src="../_images/products/img/'+imgName(data[name][i].name)+'.jpg" height="100" /></a><br /><input type="checkbox" name="upgrade_model[]" rel="'+data[name][i].name+'" value="'+data[name][i].name+' for $'+data[name][i].price+'"/> <a href="#inline-'+data[name][i].id+'" rel="prettyPhoto" >'+data[name][i].name+'</a> </td>';
				console.log('value: '+data[name][i].name+' for $'+data[name][i].price);
				upgradeCount++;
				if(upgradeCount%3 == 0){
					upgradeOut += '</tr><tr>';
				}
			}
			
			
		}
		basicOut += '</tr>';
		upgradeOut += '</tr>';
		$('#basic_pump').empty().append(basicOut);
		$('#upgrade').empty().append(upgradeOut);
		
		if(name == 'NHP-MH' || name == 'Network'){
			$('#benefit_limit').val('one per lifetime of the policy');
			
		}else if(name == 'MH'){
			$('#benefit_limit').val('one per five years of the policy');
			
		}else if(name == 'BMC'){
			$('#benefit_limit').val('one per lifetime of the policy');
			
		}else if(name == 'NHP-CM' ){
			$('#benefit_limit').val('one per lifetime of the policy');
			
		}else{
			$('#benefit_limit').val('one per birth');
		}
		
		$('#basic_items').show();
		$('#accessories').show();
		
	});
	
	$("#approved").change(function(){
		if($("#approved").attr("checked")){
			$("#btnsubmit").attr('disabled', false);
			//alert($("#approved").prop("checked"));
		}else{
			$("#btnsubmit").attr('disabled', true);
		}
	});
	
	$("input[name='pump_model']").change(function(){
		//alert($(this).val());
		if($(this).val() == 'Interested in upgrading pumps'){
			$("#upgrade_items").show();
			checkCCValue('show');
		}else{
			$("#upgrade_items").hide();
			//alert($("input[name='accessories[]']").attr());
			if(checkArray() == 0){
				checkCCValue('hide');
			}else{
				checkCCValue('show');
			}
		}
	});
	
	//checking accessories array for hiding cc info
	$("input[name='accessories[]']").change(function(){
		if($(this).attr("checked")){
			checkCCValue('show');
		}else{
			//alert($("input[name=pump_model]:checked").val());
			if( $("input[name=pump_model]:checked").val() == 'Interested in upgrading pumps' || checkArray() != 0){
				checkCCValue('show');
			}else{
				checkCCValue('hide');
			}
			
		}
	});
	
	function checkArray(){
		var i = 0;
		$("input[name='accessories[]']:checked").each(function(){
			i++;
		});
		return i;
	}
	//validating cc info
	function checkCCValue(flag){
		if(flag == 'show'){
			$("#cc_info").show();
			$("input[name=check_cc]").val('cc_show');
		}
		if(flag == 'hide'){
			$("#cc_info").hide();
			$("input[name=check_cc]").val('cc_hide');
		}
	}
  });
  
</script>