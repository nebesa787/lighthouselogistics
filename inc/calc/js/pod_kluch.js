

$.ajax({
    dataType: "json",
    method: "POST",
    async: false,
    url: window.location.protocol + '//' + document.domain + '/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.php',
    success: function (d) {
        cityArr = d;
    }
});


//console.log(cityArr);

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

    * Формируем список городов в зависимости от выбранного аукциона

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
        
		
    }
    loadAuction();

    $("#auction").change(function () {
        loadAuction();
        //$('#purchasing').val('');
        //$('#auctionFee').val('');
		
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
					var auctionFee = value * 0.04; // процент 
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
					var auctionFee = 500 + value * 0.01; // процент 
				}
				if (value >= 20000){
					var auctionFee = value * 0.04; // процент 
				}
				
				auctionFee = Math.round (auctionFee + InternetBidFee + 59 + 45);	
            }
			
			
			
            
			
            
            $('#auctionFee .value').text(auctionFee + ' $');
            $('#auctionFee_i').val(auctionFee);
			
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
            
            $('#portDispatch .value').text(portAuto);
            calcDelivery();
        });
    }
	
	
	
	
	

    function calcDelivery() {
        portAuto = $("#sityAuto").val();
        port = $('#portDispatch .value').text();
		
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
    
            $('#costDelivery .value').text(deliverCalc + ' $');
        } else {
    
        }

    }
    $('#typeVehicle').change(function () {
        calcDelivery();
    });

});




$(document).ready(function () {



    var exchange = $('#tabCalc').data('exchange');



    function math($a) {

        $a = Math.round($a * 100) / 100;// сокращаем до 2х занков после запятой
		
		$a = Math.round($a);

        return $a;

    }

    //Цена Машины
    
    var carPrice = $('#purchasing').val();
    

    //Объем двигателя

    var engine;



    function engineCapacity() {

        engine = $('#engineCapacity').val();

    }

    engineCapacity();
	
	
	var date_year;
	var year_old;
	
	function car_Year() {
		var currentTime = new Date();
		var year = currentTime.getFullYear();

        date_year = $('#date_year').val();
		
		if (date_year > 1) {
		
			year_old = year - date_year - 1 ;
			if (year_old < 1) {year_old = 1;}
		}
    }

    car_Year();
	
	
	
    $("#date_year").change(function () {

        car_Year();

    });
	



    $("#engineCapacity").change(function () {

        engineCapacity();

    });



    function engineType() {

        var engineType = $('#engineType').val();

        return engineType;

    }



    //массив ставки акцижа бензин

    var exciseTaxArrayPetrol = [

        //['Engine capacity from', 'Engine capacity up to', 'Price'],

        
        [0, 3000, 50],

        [3001, 5500, 100]

    ];



    //массив ставки акцижа дизель

    var exciseTaxArrayDiesel = [

        //['Engine capacity from', 'Engine capacity up to', 'Price'],

        
        [0, 3500, 75],

        [3501, 5500, 150]

    ];



    //Расчет

    $('input[type="submit"]').on('click', function () {
	
		var carPrice = $('#purchasing').val();
	

        if(engineType()=='petrol'){

            exciseTaxArray = exciseTaxArrayPetrol;
			
			for (var i = 0; i < exciseTaxArray.length; i++) {

				if (engine >= exciseTaxArray[i][0] && engine <= exciseTaxArray[i][1]) {

					var exciseTax = ( exciseTaxArray[i][2]   * (engine/1000) * year_old ) * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)
					
					
				}
			}
			

        }else if(engineType()=='diesel'){

            exciseTaxArray = exciseTaxArrayDiesel;
			
			for (var i = 0; i < exciseTaxArray.length; i++) {

				if (engine >= exciseTaxArray[i][0] && engine <= exciseTaxArray[i][1]) {

					var exciseTax = ( exciseTaxArray[i][2]   * (engine/1000) * year_old ) * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)
					
				}
			}
			

        }else if(engineType()=='hybrid'){

            var exciseTax = 100 * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)

        }else if(engineType()=='electro'){

            var exciseTax = 0 * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)

        }

        
		
				
		
        $('#exciseTax').text(math(exciseTax) + ' $');

        if (typeof carPrice != "undefined") {

            //carPrice = parseInt(carPrice); // Цена ТС
			var auctionFee_i = $('#auctionFee_i').val(); 
			
			
			carPrice2 = parseInt(carPrice) + 400 + parseInt(auctionFee_i); // Цена ТС
			
			
			
			$('#price_lot .value').text(math(carPrice) + ' $');
			
			if (carPrice <2000){
				var uslugi = 750;
			}else if( (carPrice >= 2000 ) && (carPrice < 20000)){
				var uslugi = 1000;
			}else if(carPrice >= 20000){
				var uslugi = 1500;
			}
		
			
			$('#uslugi').text(math(uslugi) + ' $');
			
			
			
            
            
			if(engineType()=='electro'){
				var customsDuty = 0; //Таможенная пошлина (10%)
				var VAT = 0; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
			}else{
				var customsDuty = carPrice2 * 0.1; //Таможенная пошлина (10%)
				var VAT = (carPrice2 + customsDuty + exciseTax) * 0.2; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
			}
			
            
			$('#customsDuty').text(math(customsDuty) + ' $');
			$('#VAT').text(math(VAT) + ' $');
			
			
			
            
			var expedicija = 850; //Экспедиция
            $('#expedicija').text(math(expedicija) + ' $');	
			
			var usl_evroterminala = 50; //Услуи евротерминала
            $('#usl_evroterminala').text(math(usl_evroterminala) + ' $');
			
			
			
			if (carPrice < 14150){
				var pens_fond = carPrice2 * 0.03; //ПФ
				var pens_fond_proc = 3; //ПФ
			}else if( (carPrice > 14150 ) && (carPrice < 24900)){
				var pens_fond = carPrice2 * 0.04; //ПФ
				var pens_fond_proc = 4; //ПФ
			}else if(carPrice > 24900){
				var pens_fond = carPrice2 * 0.05; //ПФ
				var pens_fond_proc = 5; //ПФ
			}
			
			
            $('#pens_fond').text(math(pens_fond) + ' $');
            $('#pens_fond_proc').text(pens_fond_proc);
			
			
			
			
			
            var totalAmount = math(carPrice) + math(auctionFee_i) + math(deliverCalc) + math(exciseTax) + math(customsDuty) + math(VAT) + math(expedicija) + math(usl_evroterminala) + math(uslugi) + math(pens_fond); //Общая сумма, потраченная на приобретение
            $('#totalAmount').text(math(totalAmount) + ' $');
            $('.result-customs').show();
        }
    })
});