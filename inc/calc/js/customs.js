$(document).ready(function () {



    var exchange = $('#tabCalc').data('exchange');



    function math($a) {

        $a = Math.round($a * 100) / 100;// сокращаем до 2х занков после запятой
		
		$a = Math.round($a);

        return $a;

    }

    //Цена Машины
    var carPrice = $('#carPrice').val();;
    $('#carPrice').keyup(function (e) {

        if ($.isNumeric(e.key)) { //проверяем чтоб были введены только цифры

            carPrice = $(this).val();
        }
    });

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
		
			year_old = year - date_year -1;
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

            carPrice = parseInt(carPrice); // Цена ТС
			
			
			if(engineType()=='electro'){
				var customsDuty = 0; //Таможенная пошлина (10%)
				var VAT = 0; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
			}else{
				 var customsDuty = carPrice * 0.1; //Таможенная пошлина (10%)
				var VAT = (carPrice + customsDuty + exciseTax) * 0.2; //НДС (20% от суммы его таможенной цены, пошлины и акцизного сбора)
			}

           

            $('#customsDuty').text(math(customsDuty) + ' $');

            
            $('#VAT').text(math(VAT) + ' $');
            
            
            var totalAmount = carPrice + exciseTax + customsDuty + VAT; //Общая сумма, потраченная на приобретение
            $('#totalAmount').text(math(totalAmount) + ' $');
            $('.result-customs').show();
        }
    })
});