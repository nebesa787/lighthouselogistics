

$.ajax({
    dataType: "json",
    method: "POST",
    async: false,
    url: window.location.protocol + '//' + document.domain + '/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.json',
    success: function (d) {
        cityArr = d[1];
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
    [1600.00, 1799.99, 290.00],
    [1800.00, 1999.99, 310.00],
    [2000.00, 2199.99, 335.00],
    [2200.00, 2399.99, 350.00],
    [2400.00, 2599.99, 365.00],
    [2600.00, 2799.99, 385.00],
    [2800.00, 2999.99, 400.00],
    [3000.00, 3499.99, 415.00],
    [3500.00, 3999.99, 430.00],
    [4000.00, 4999.99, 450.00],
    [5000.00, 999999.99, 450.00]
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
    [1000, 1499.99, 49],
    [1500, 1999.99, 59],
    [2000, 3999.99, 69],
    [4000.00, 10000000.00, 89]
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

    * Формируем список городов в зависимости от выбранного аукциона

    */

    function state_add(auctionChoice) {
        var auction = $('#auction').val();
        $("#sityAuto [value!='null']").remove();
        $("#sityAuto :first").change();
        for (var i = 0; i < cityArr.length; i++) {
			
		
            if (auctionChoice == 'Copart' && cityArr[i][4] == 1) {
                $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '">' + cityArr[i][1] + '</option>'));
            } else if (auctionChoice == 'Iaai' && cityArr[i][5] == 1) {
                $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '">' + cityArr[i][1] + '</option>'));
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

    * Расчет аукционного сбора в зависимости от выбраного аукциона  и введенной закупочной цены

    */

    function purchasing(auctionChoice) {
        function purch(){
             //проверяем чтоб были введены только цифры
             var value = $('#purchasing').val();
             var auctionFee;
             if (auctionChoice == 'Copart') {
                internetBidFeeArr = internetBidFeeCopart;
                arr = Copart;
                maxArr = 100000;
                maxValue = value / 100 * 2;
            } else if (auctionChoice == 'Iaai') {
                internetBidFeeArr = internetBidFeeIaai;
                arr = Iaai;
                maxArr = 5000;
                maxValue = 450 + (value / 100);
            }
            for (var c = 0; c < arr.length; c++) {
                if (value >= arr[c][0] && value <= arr[c][1]) {
                    auctionFee = arr[c][2];
                } else if (value > maxArr) {
                    auctionFee = maxValue;
                    break;
                }
            }
            for (var i = 0; i < internetBidFeeArr.length; i++) {
                if (value >= internetBidFeeArr[i][0] && value <= internetBidFeeArr[i][1]) {					
					var InternetBidFee = internetBidFeeArr[i][2];					
                }
            }
			
			if (value >= 15000){
				var InternetBidFee = value * 0.04; // процент 
			}	
			
            auctionFee = Math.round (auctionFee + InternetBidFee + 59);
			
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

   * Поиск порта отправки в зависимости от города покупки

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
				aditional_prise = 100;
			}
        } else if (port == 'New Jersey') {
            typeVehicle = $('#typeVehicle option:selected').data('new_jersey');
			if (portArrival() == 'klajpeda'){
				aditional_prise = 100;
			}
        } else if (port == 'Houston') {
            typeVehicle = $('#typeVehicle option:selected').data('houston');
			if (portArrival() == 'klajpeda'){
				aditional_prise = 100;
			}			
        } else if (port == 'Los Angeles') {
            typeVehicle = $('#typeVehicle option:selected').data('los_angeles');
			if (portArrival() == 'klajpeda'){
				aditional_prise = 300;
			}
        }

        if (typeVehicle != 'null' && portAuto != 'null') {
            typeVehicle = Number(typeVehicle);
            deliverCalc = portAutoPrice + 100 + typeVehicle + aditional_prise;
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