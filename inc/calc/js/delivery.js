

$.ajax({
    dataType: "json",
    method: "POST",
    async: false,
    url: window.location.protocol + '//' + document.domain + '/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.php',
    success: function (d) {
        cityArr = d;
    }
});
availability = $('#calculators').data('availability');

var Copart = [

    // ['Price auto from', 'Price auto up to', 'Price'],
    [0.01, 49.99, 1.00],
    [50.00, 99.99, 1.00],
    [100.00, 199.99, 25.00],
    [200.00, 299.99, 50.00],
    [300.00, 349.99, 75.00],
    [350.00, 399.99, 75.00],
    [400.00, 449.99, 110.00],
    [450.00, 499.99, 110.00],
    [500.00, 549.99, 125.00],
    [550.00, 599.99, 130.00],
    [600.00, 699.99, 140.00],
    [700.00, 799.99, 155.00],
    [800.00, 899.99, 170.00],
    [900.00, 999.99, 185.00],
    [1000.00, 1199.99, 200.00],
    [1200.00, 1299.99, 225.00],
    [1300.00, 1399.99, 240.00],
    [1400.00, 1499.99, 250.00],
    [1500.00, 1599.99, 260.00],
    [1600.00, 1699.99, 275.00],
    [1700.00, 1799.99, 285.00],
    [1800.00, 1999.99, 300.00],
    [2000.00, 2399.99, 325.00],
    [2400.00, 2499.99, 335.00],
    [2500.00, 2999.99, 350.00],
    [3000.00, 3499.99, 400.00],
    [3500.00, 3999.99, 450.00],
    [4000.00, 4499.99, 475.00],
    [4500.00, 4999.99, 500.00],
    [5000.00, 5999.99, 525.00],
    [6000.00, 7499.99, 550.00],
    [7500.00, 9999.99, 575.00],
    [10000.00, 14999.99, 600.00],
    [15000.00, 19999.99, 0.04],
    [20000.00, 24999.99, 0.04],
    [25000.00, 29999.99, 0.04],
    [30000.00, 34999.99, 0.04],
    [35000.00, 100000, 0.04],
];

var Iaai = [
    [0, 99.99, 1.00],
    [100.00, 199.99, 40.00],
    [200.00, 299.99, 60.00],
    [300.00, 349.99, 75.00],
    [350.00, 399.99, 90.00],
    [400.00, 499.99, 100.00],
    [500.00, 599.99, 130.00],
    [600.00, 699.99, 145.00],
    [700.00, 799.99, 160.00],
    [800.00, 899.99, 175.00],
    [900.00, 999.99, 190.00],
	
    [1000.00, 1099.99, 205.00],
    [1100.00, 1199.99, 220.00],
    [1200.00, 1299.99, 230.00],
    [1300.00, 1399.99, 240.00],
    [1400.00, 1499.99, 255.00],
	
    [1500.00, 1599.99, 270.00],
    [1600.00, 1699.99, 290.00],
    [1700.00, 1799.99, 300.00],
    
	[1800.00, 1999.99, 310.00],
    
	[2000.00, 2199.99, 325.00],	
    [2200.00, 2399.99, 330.00],
    [2400.00, 2499.99, 345.00],
    [2500.00, 2999.99, 360.00],
	
    [3000.00, 3499.99, 400.00],
    [3500.00, 3999.99, 450.00],
    
	[4000.00, 4499.99, 475.00],
	[4500.00, 4999.99, 500.00],
	
	[5000.00, 5999.99, 525.00],
	
	[6000.00, 7499.99, 550.00],
	
    [7500.00, 19999.99, 500.00],
	
	[20000.00, 10000000, 0.04],
];





var internetBidFeeCopart = [
    [0, 99.99, 0],
    [100, 499.99, 39],
    [500, 999.99, 49],
    [1000, 1499.99, 69],
    [1500, 1999.99, 79],
    [2000, 3999.99, 89],
    [4000, 5999.99, 99],
    [6000, 7999.99, 119],
    [8000.00, 10000000.00, 129]
];




var internetBidFeeIaai = [
    [0, 99.99, 0],
    [100, 499.99, 29],
    [500, 999.99, 39],
    [1000, 1499.99, 59],
    [1500, 1999.99, 69],
    [2000, 3999.99, 79],
    [4000, 5999.99, 89],
    [6000, 7999.99, 99],
    [8000.00, 10000000.00, 119]
];



    $(document).ready(function () {
	
	
	 function portArrival() {
        var portArrival = $('#portArrival').val();
        return portArrival;

    }

    $("#portArrival").change(function () {

        portArrival();
		calcDelivery();
    });
	
	
		
	$( "#purchasing" ).keyup(function( event ) {
		auctionChoice = $('#auction').val();
		purchasing(auctionChoice);
	 
	}).keydown(function( event ) {
	  if ( event.which == 13 ) {
			auctionChoice = $('#auction').val();
			purchasing(auctionChoice);
	  }
	});
	 
	$( "#purchasing").click(function() {
	  $( "#purchasing" ).keyup();
	});
	

    /*

    * ?????????????????? ???????????? ?????????????? ?? ?????????????????????? ???? ???????????????????? ????????????????

    */

    function state_add(auctionChoice) {
        var auction = $('#auction').val();
        $("#sityAuto [value!='null']").remove();
        $("#sityAuto :first").change();
        for (var i = 0; i < cityArr.length; i++) {
			
		
            if (auctionChoice == 'Copart' && cityArr[i][4] == 1) {
                $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '">' + cityArr[i][6] + '</option>'));
            } else if (auctionChoice == 'Iaai' && cityArr[i][5] == 1) {
                $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '">' + cityArr[i][6] + '</option>'));
            }
        }
    }

    function loadAuction() {
        auctionChoice = $('#auction').val();
        state_add(auctionChoice);
        purchasing(auctionChoice);
        sityAuto(auctionChoice);
        $('#portDispatch').hide();
		
    }
    loadAuction();

    $("#auction").change(function () {
        loadAuction();
        $('#purchasing').val('');
        $('#auctionFee').val('');
		
    });

    /*

    * ???????????? ?????????????????????? ?????????? ?? ?????????????????????? ???? ?????????????????? ????????????????  ?? ?????????????????? ???????????????????? ????????

    */

    function purchasing(auctionChoice) {
        function purch(){
             //?????????????????? ???????? ???????? ?????????????? ???????????? ??????????
             var value = $('#purchasing').val();
             var auctionFee;
             if (auctionChoice == 'Copart') {
                
				for (var c = 0; c < Copart.length; c++) {
					if (value >= Copart[c][0] && value <= Copart[c][1]) {
						auctionFee = Copart[c][2];
					}
				}
				
				for (var i = 0; i < internetBidFeeCopart.length; i++) {
					if (value >= internetBidFeeCopart[i][0] && value <= internetBidFeeCopart[i][1]) {					
						var InternetBidFee = internetBidFeeCopart[i][2];					
					}
				}
				
				if (value >= 15000){
					var auctionFee = value * 0.04; // ?????????????? 
				}	
				
				auctionFee = Math.round (auctionFee + InternetBidFee + 59);
				
				
			} else if (auctionChoice == 'Iaai') {
               
				for (var c = 0; c < Iaai.length; c++) {
					if (value >= Iaai[c][0] && value <= Iaai[c][1]) {
						auctionFee = Iaai[c][2];
					} 
				}
				
				for (var i = 0; i < internetBidFeeIaai.length; i++) {
					if (value >= internetBidFeeIaai[i][0] && value <= internetBidFeeIaai[i][1]) {					
						var InternetBidFee = internetBidFeeIaai[i][2];					
					}
				}
				
				
				if (value >= 7500 && value <= 19999.99) {					
					var auctionFee = 500 + value * 0.01; // ?????????????? 
				}
				if (value >= 20000){
					var auctionFee = value * 0.04; // ?????????????? 
				}
				
				auctionFee = Math.round (auctionFee + InternetBidFee + 59 + 45);	
            }
			
            $('#auctionFee').val(auctionFee);
        }
        purch();
        $('#purchasing').keyup(function (e) {
            if ($.isNumeric(e.key)) {
               purch();
            }
        });
    }
    /*

   * ?????????? ?????????? ???????????????? ?? ?????????????????????? ???? ???????????? ??????????????

   */
    function sityAuto(auctionChoice) {
        $("#sityAuto").change(function () {
            var value = $(this).val();
            var portAuto;
            for (var i = 0; i < cityArr.length; i++) {
                if (auctionChoice == 'Copart' && cityArr[i][4] == 1 && cityArr[i][0] == value) {
                    portAuto = cityArr[i][2];
                } else if (auctionChoice == 'Iaai' && cityArr[i][5] == 1 && cityArr[i][0] == value) {
                    portAuto = cityArr[i][2];
                }
            }
            $('#portDispatch').show();
            $('#portDispatch > .value').text(portAuto);
            calcDelivery();
        });
    }
	
	
	
	
	

    function calcDelivery() {
        portAuto = $("#sityAuto").val();
        port = $('#portDispatch > .value').text();
		
		var aditional_prise =0;
		
		
        for (var i = 0; i < cityArr.length; i++) {
            if (portAuto != 'null' && cityArr[i][0] == portAuto) {
                portAutoPrice = cityArr[i][3]
            }
        }

		
		if (port == 'Savannah') {
            typeVehicle = $('#typeVehicle option:selected').data('savannah');
			if (portArrival() == 'klajpeda'){
				typeVehicle = $('#typeVehicle option:selected').data('savannah_klajpeda');
			}
        } else if (port == 'New Jersey') {
            typeVehicle = $('#typeVehicle option:selected').data('new_jersey');
			if (portArrival() == 'klajpeda'){
				typeVehicle = $('#typeVehicle option:selected').data('new_jersey_klajpeda');
			}
        } else if (port == 'Houston') {
            typeVehicle = $('#typeVehicle option:selected').data('houston');
			if (portArrival() == 'klajpeda'){
				typeVehicle = $('#typeVehicle option:selected').data('houston_klajpeda');
			}			
        } else if (port == 'Los Angeles') {
            typeVehicle = $('#typeVehicle option:selected').data('los_angeles');
			if (portArrival() == 'klajpeda'){
				typeVehicle = $('#typeVehicle option:selected').data('los_angeles_klajpeda');
			}
        } else if (port == 'Seattle') {
            typeVehicle = $('#typeVehicle option:selected').data('seattle');
			if (portArrival() == 'klajpeda'){
				typeVehicle = $('#typeVehicle option:selected').data('seattle_klajpeda');
			}
        }
		
		
		
		

        if (typeVehicle != 'null' && portAuto != 'null') {
            typeVehicle = Number(typeVehicle);
            deliverCalc = portAutoPrice + typeVehicle;
            $('#costDelivery').show();
            $('#costDelivery > .value').text(deliverCalc + ' $');
        } else {
            $('#costDelivery').hide();
        }

    }
    $('#typeVehicle').change(function () {
        calcDelivery();
    });

});