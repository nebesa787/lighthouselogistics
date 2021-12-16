/*
-------------------------------------------------------------------------------------------------------------------
РАСЧЕТ ДОСТАВКИ
 */



$.ajax({
    dataType: "json",
    method: "POST",
    async: false,
    url: window.location.protocol + '//' + document.domain + '/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.php',
    success: function (d) {
        cityArr = d;
		console.log(cityArr);
    }
});



/*

jQuery.ajax({
          url: 'https://americancars.in.ua/wp-admin/admin-ajax.php',
          data:{
               'action':'do_ajax',
               'fn':'get_cityArr'
               },
          dataType: 'JSON',
          success:function(data){
				cityArr = data;
				 console.log(cityArr);
                },
          error: function(errorThrown){
               alert('error');
               console.log(errorThrown);
          }


     });


*/


availability = $('#calculators').data('availability');


//аукционный сбор copart в зависимости от цены авто

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


/*
* Формируем список городов в зависимости от выбранного аукциона
*/
function state_add(auctionChoice) {

    var auction = $('#auction').val();
    $("#sityAuto [value!='null']").remove();
    $("#sityAuto :first").change();
    for (var i = 0; i < cityArr.length; i++) {
        if (auctionChoice == 'Copart' && cityArr[i][4] == 1) {
            $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '" data-portAuto="' + cityArr[i][2] + '">' + cityArr[i][1] + '</option>'));
        } else if (auctionChoice == 'Iaai' && cityArr[i][5] == 1) {
            $('#sityAuto').append($('<option class="' + cityArr[i][0] + '" value="' + cityArr[i][0] + '" data-portAuto="' + cityArr[i][2] + '">' + cityArr[i][1] + '</option>'));
        }
    }
}

/*end*/


/*
* Расчет аукционного сбора в зависимости от выбраного аукциона  и введенной закупочной цены
*/


function purchasing(auctionChoice) {
    //проверяем чтоб были введены только цифры
    var value = $('#purchasing').val();

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
			
        
			
            
    
    if (availability != 'in_ukraine') { // проверяем чтоб автомобиль был не в Украине
        $('#auctionFee-val').text(auctionFee + ' $');// выводим результат
    
    } else {
        $('#auctionFee-val').text('0 $')// выводим результат
    }


}

/*end*/


/*
* Поиск порта отправки в зависимости от города покупки
*/
function sityAuto(auctionChoice) {
    var value = $("#sityAuto").val();
    var portAuto;
    for (var i = 0; i < cityArr.length; i++) {
        if (auctionChoice == 'Copart' && cityArr[i][4] == 1 && cityArr[i][0] == value) {
            portAuto = cityArr[i][2];
        } else if (auctionChoice == 'Iaai' && cityArr[i][5] == 1 && cityArr[i][0] == value) {
            portAuto = cityArr[i][2];
        }
    }
    $('#portDispatch').show();//показываем блок результатов
    $('#portDispatch > .value').text(portAuto);//выводим результаты

}

/*end*/


/*
*просчет стоимости доставки
*/


var deliverCalc  = 0;
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

/*end*/


/*
*Расчеты при изменении типа ТС
*/
$('#typeVehicle').change(function () {
    calcDelivery();//расчитываем и выводим результаты стоимости доставки
});
/*end*/


/*
*Расчеты при изменении цены автомобиля
*/
$('#purchasing').keyup(function (e) {
    auctionChoice = $('#auction').val();
    if ($.isNumeric(e.key)) {
        purchasing(auctionChoice);//расчитываем аукционный сбор
        calcDelivery();//расчитываем и выводим результаты стоимости доставки
    }
});
/*end*/


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
		calcCustoms();
	 
	}).keydown(function( event ) {
	  if ( event.which == 13 ) {
			auctionChoice = $('#auction').val();
			purchasing(auctionChoice);
			calcCustoms();
	  }
	});
	
	
	$( "#carPrice" ).keyup(function( event ) {
		auctionChoice = $('#auction').val();
		purchasing(auctionChoice);
		calcCustoms();
	 
	}).keydown(function( event ) {
	  if ( event.which == 13 ) {
			auctionChoice = $('#auction').val();
			purchasing(auctionChoice);
			calcCustoms();
	  }
	});
	
	
	
	 
	

/*
*Расчеты при изменении аукциона
*/
$("#auction").change(function () {
    auctionChoice = $('#auction').val();
    state_add(auctionChoice);//выводим порт отправки
    purchasing(auctionChoice);//расчитываем аукционный сбор
    sityAuto(auctionChoice);//выводим порт отправления
    calcDelivery();//расчитываем и выводим результаты стоимости доставки
});


/*
*Расчеты при изменении города покупки
*/
$("#sityAuto").change(function () {
    auctionChoice = $('#auction').val();//берем значение аукциона
    sityAuto(auctionChoice);//расчитываем и выводим результаты стоимости доставки и порта отправления
    calcDelivery();//расчитываем и выводим результаты стоимости доставки
});
/*end*/


/*
*Расчеты при загрузке страницы
*/
$(document).ready(function () {
    auctionChoice = $('#auction').val();//берем значение аукциона введенное из админки
	//state_add(auctionChoice);//выводим порт отправки
    purchasing(auctionChoice); //расчитываем аукционный сбор
    sityAuto(auctionChoice);//выводим порт отправления
	
    calcDelivery();//расчитываем и выводим результаты стоимости доставки
    
});
/*end*/



/*
КОНЕЦ РАСЧЕТ ДОСТАВКИ
-------------------------------------------------------------------------------------------------------------------
 */


/*
-------------------------------------------------------------------------------------------------------------------
РАСЧЕТ ТАМОЖЕННОГО ОФОРМЛЕНИЯ
 */
var exchange = $('#tabCalc').data('exchange');// коэффициэнт доллара

function math($a) {
    $a = Math.round($a * 100) / 100;// сокращаем до 2х занков после запятой
	$a = Math.round($a);
    return $a;
}



	
	var date_year;
	var year_old;
	
	function car_Year() {
		var currentTime = new Date();
		var year = currentTime.getFullYear();

        date_year = $('#date_year').val();
		
		if (date_year > 1) {
		
			year_old = year - date_year - 1;
			
			if (year_old < 1) {year_old = 1;}
		}
    }

    car_Year();
	
	
	
    $("#date_year").change(function () {

        car_Year();

    });
	
	
	
//var carPrice = $('#carPrice').val();//создаем постоянную цены
var carPrice = $('#purchasing').val();//создаем постоянную цены


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
function calcCustoms() {
    var engine = $('#engineCapacity').val(); //Объем двигателя
    var engineType = $('#engineType').val(); //Тип двигателя
    
	
    if(engineType=='petrol'){
            exciseTaxArray = exciseTaxArrayPetrol;			
			for (var i = 0; i < exciseTaxArray.length; i++) {
				if (engine >= exciseTaxArray[i][0] && engine <= exciseTaxArray[i][1]) {
					var exciseTax = ( exciseTaxArray[i][2]   * (engine/1000) * year_old ) * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)					
				}
			}
    }else if(engineType=='diesel'){
            exciseTaxArray = exciseTaxArrayDiesel;			
			for (var i = 0; i < exciseTaxArray.length; i++) {
				if (engine >= exciseTaxArray[i][0] && engine <= exciseTaxArray[i][1]) {
					var exciseTax = ( exciseTaxArray[i][2]   * (engine/1000) * year_old ) * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)					
				}
			}
        
		
	}else if(engineType =='hybrid'){

        var exciseTax = 100 * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)

	}else if(engineType =='electro'){

        var exciseTax = 0 * exchange; //Акцизный сбор (Объем двигателя * пошлину за 1см3)

	}
    
	

	/*
    $('#exciseTax').text(math(exciseTax) + ' $');
    if (typeof carPrice != "undefined") {
        carPrice = parseInt(carPrice); // Цена ТС


        if (engineType != 'electro') {
            var customsDuty = carPrice * 0.1; //Таможенная пошлина (10%)
            var VAT = (carPrice + customsDuty + exciseTax) * 0.2; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
            var execution = 15 * exchange; //Оформление
        } else {
            var customsDuty = 0; //Таможенная пошлина (10%)
            var VAT = 0;//НДС
            var execution = 0; //Оформление
        }
        $('#VAT').text(math(VAT) + ' $');
        $('#customsDuty').text(math(customsDuty) + ' $');


        $('#execution').text(math(execution) + ' $');
        totalAmount = carPrice + exciseTax + customsDuty + VAT + execution; //Общая сумма, потраченная на приобретение
        totalAmount = math(totalAmount);
        $('#totalAmount').text(totalAmount + ' $');


    }
	
	*/
	
	
	$('#exciseTax').text(math(exciseTax) + ' $');

        if (typeof carPrice != "undefined") {
			
			/////////////////
			
			
			
			 var value = $('#purchasing').val();

			
				internetBidFeeArr = internetBidFeeCopart; //приравниваем к общей переменной
				arr = Copart;
				maxArr = 35000;
				maxValue = value / 100 * 2;
			
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
			
			//auctionFee = auctionFee + InternetBidFee + 59;	
			auctionFee = Math.round (auctionFee + InternetBidFee + 59);
			
			
			
			//////////////
			
            //carPrice = parseInt(carPrice) + auctionFee + 400; // Цена ТС
            carPrice2 = parseInt(carPrice) + 400 + parseInt(auctionFee); // Цена ТС
            

            var customsDuty = carPrice2 * 0.1; //Таможенная пошлина (10%)

            $('#customsDuty').text(math(customsDuty) + ' $');

            var VAT = (carPrice2 + customsDuty + exciseTax) * 0.2; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
            $('#VAT').text(math(VAT) + ' $');
          
            
			
			
			totalAmount = carPrice2 + exciseTax + customsDuty + VAT ; //Общая сумма, потраченная на приобретение
			totalAmount = math(totalAmount);
			$('#totalAmount').text(totalAmount + ' $');



			
        }
	
	
	
}

/*
*Расчеты при изменении цены
*/
$("#purchasing").keyup(function (e) {
    if ($.isNumeric(e.key)) { //проверяем чтоб были введены только цифры
        carPrice = $(this).val();
        calcCustoms();
		total();
    }
});

/*
*Расчеты при изменении обьера или типа двигателя
*/
$("#engineCapacity, #engineType").change(function () {
    calcCustoms();
});
calcCustoms();// запускаем просчет

/*
-------------------------------------------------------------------------------------------------------------------
КОНЕЦ РАСЧЕТ ТАМОЖЕННОГО ОФОРМЛЕНИЯ
 */

/*
-------------------------------------------------------------------------------------------------------------------
РАСЧЕТ ОБЩЕЙ СТОИМОСТИ АВТОМОБИЛЯ
*/
function total() {

    if (availability != 'in_ukraine') { // проверяем чтоб автомобиль был не в Украине
        var totalVal = totalAmount + auctionFee + deliverCalc;
    } else {
        var totalVal = totalAmount;
    }


    $('#totalCost').text(math(totalVal) + ' $')
}

$('#purchasing, #carPrice').keyup(function () {
    total();

});
$('#purchasing,#auction,#sityAuto,#typeVehicle,#engineCapacity,#engineType').change(function () {
    total();

});
$(document).ready(function () {
    total();
});

