<div class="row">

	<div class="col-md-4">
	
		<div class="box white-box delivery-calc calc">

			
			<div class="box-body">

				<div class="white-form">
				
				
					
					<label for="purchasing"><?php echo pll__('Purchase amount'); ?>, $
						
						<input type="number" id="purchasing" value="<?php echo $val;?>">

					</label>
					
					
					<label for="typeVehicle"><?php echo pll__('Type of vehicle');?>

						<select name="typeVehicle" id="typeVehicle">
							<?php 
							
							$type_vehicle = get_field('type_vehicle','delivery'); 
							$sedan_savannah = get_field('sedan_savannah','delivery'); 
						$sedan_new_jersey = get_field('sedan_new_jersey','delivery'); 
						$sedan_houston = get_field('sedan_houston','delivery'); 
						$sedan_los_angeles = get_field('sedan_los_angeles','delivery'); 
						$sedan_seattle = get_field('sedan_seattle','delivery'); 
						
						$pickup_savannah = get_field('pickup_savannah','delivery'); 
						$pickup_new_jersey = get_field('pickup_new_jersey','delivery'); 
						$pickup_houston = get_field('pickup_houston','delivery'); 
						$pickup_los_angeles = get_field('pickup_los_angeles','delivery'); 
						$pickup_seattle = get_field('pickup_seattle','delivery'); 
						
						$sedan_savannah_klajpeda = get_field('sedan_savannah_klajpeda','delivery'); 
						$sedan_new_jersey_klajpeda = get_field('sedan_new_jersey_klajpeda','delivery'); 
						$sedan_houston_klajpeda = get_field('sedan_houston_klajpeda','delivery'); 
						$sedan_los_angeles_klajpeda = get_field('sedan_los_angeles_klajpeda','delivery'); 
						$sedan_seattle_klajpeda = get_field('sedan_seattle_klajpeda','delivery'); 
						
						$pickup_savannah_klajpeda = get_field('pickup_savannah_klajpeda','delivery'); 
						$pickup_new_jersey_klajpeda = get_field('pickup_new_jersey_klajpeda','delivery'); 
						$pickup_houston_klajpeda = get_field('pickup_houston_klajpeda','delivery'); 
						$pickup_los_angeles_klajpeda = get_field('pickup_los_angeles_klajpeda','delivery'); 
						$pickup_seattle_klajpeda = get_field('pickup_seattle_klajpeda','delivery'); 
							
							?>
                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>" data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==2) echo 'selected';?>><?php echo pll__('Wagon');?></option>

                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>" data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==3) echo 'selected';?>><?php echo pll__('Hatchback');?></option>

                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>" data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==4) echo 'selected';?>><?php echo pll__('Coupe');?></option>


                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>" data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==5) echo 'selected';?>><?php echo pll__('SUV');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-savannah_klajpeda="<?= $pickup_savannah_klajpeda?>" data-new_jersey="<?= $pickup_new_jersey?>" data-new_jersey_klajpeda="<?= $pickup_new_jersey_klajpeda?>" data-houston="<?= $pickup_houston?>" data-houston_klajpeda="<?= $pickup_houston_klajpeda?>" data-los_angeles="<?= $pickup_los_angeles?>" data-los_angeles_klajpeda="<?= $pickup_los_angeles_klajpeda?>"  data-seattle="<?= $pickup_seattle?>" data-seattle_klajpeda="<?= $pickup_seattle_klajpeda?>" <?php if($type_vehicle==6) echo 'selected';?>><?php echo pll__('Minivan');?></option>

                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>"  data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==7) echo 'selected';?>><?php echo pll__('Crossover');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-savannah_klajpeda="<?= $pickup_savannah_klajpeda?>" data-new_jersey="<?= $pickup_new_jersey?>" data-new_jersey_klajpeda="<?= $pickup_new_jersey_klajpeda?>" data-houston="<?= $pickup_houston?>" data-houston_klajpeda="<?= $pickup_houston_klajpeda?>" data-los_angeles="<?= $pickup_los_angeles?>" data-los_angeles_klajpeda="<?= $pickup_los_angeles_klajpeda?>"  data-seattle="<?= $pickup_seattle?>" data-seattle_klajpeda="<?= $pickup_seattle_klajpeda?>" <?php if($type_vehicle==8) echo 'selected';?>><?php echo pll__('Pickup');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-savannah_klajpeda="<?= $pickup_savannah_klajpeda?>" data-new_jersey="<?= $pickup_new_jersey?>" data-new_jersey_klajpeda="<?= $pickup_new_jersey_klajpeda?>" data-houston="<?= $pickup_houston?>" data-houston_klajpeda="<?= $pickup_houston_klajpeda?>" data-los_angeles="<?= $pickup_los_angeles?>" data-los_angeles_klajpeda="<?= $pickup_los_angeles_klajpeda?>"  data-seattle="<?= $pickup_seattle?>" data-seattle_klajpeda="<?= $pickup_seattle_klajpeda?>"  <?php if($type_vehicle==9) echo 'selected';?>><?php echo pll__('Van');?></option>
						</select>

					</label>
					
					
						<label for="engineCapacity">Объем двигателя

								<select id="engineCapacity">

									<option value="500">0.5</option>

									<option value="600">0.6</option>

									<option value="700">0.7</option>

									<option value="800">0.8</option>

									<option value="900">0.9</option>

									<option value="1000">1.0</option>

									<option value="1100">1.1</option>

									<option value="1200">1.2</option>

									<option value="1300">1.3</option>

									<option value="1400">1.4</option>

									<option value="1500">1.5</option>

									<option value="1600">1.6</option>

									<option value="1700">1.7</option>

									<option value="1800">1.8</option>

									<option value="1900">1.9</option>

									<option value="2000">2.0</option>

									<option value="2100">2.1</option>

									<option value="2200">2.2</option>

									<option value="2300">2.3</option>

									<option value="2400">2.4</option>

									<option value="2500">2.5</option>

									<option value="2600">2.6</option>

									<option value="2700">2.7</option>

									<option value="2800">2.8</option>

									<option value="2900">2.9</option>

									<option value="3000">3.0</option>

									<option value="3100">3.1</option>

									<option value="3200">3.2</option>

									<option value="3300">3.3</option>

									<option value="3400">3.4</option>

									<option value="3500">3.5</option>

									<option value="3600">3.6</option>

									<option value="3700">3.7</option>

									<option value="3800">3.8</option>

									<option value="3900">3.9</option>

									<option value="4000">4.0</option>

									<option value="4100">4.1</option>

									<option value="4200">4.2</option>

									<option value="4300">4.3</option>

									<option value="4400">4.4</option>

									<option value="4500">4.5</option>

									<option value="4600">4.6</option>

									<option value="4700">4.7</option>

									<option value="4800">4.8</option>
									
									<option value="4900">4.9</option>
									
									<option value="5000">5.0</option>
									
									<option value="5100">5.1</option>
									
									<option value="5200">5.2</option>
									
									<option value="5300">5.3</option>
									
									<option value="5400">5.4</option>
									
									<option value="5500">5.5</option>

								</select>

							</label>

							<label for="engineType"><?php echo pll__('Engine type');?>

								<select name="engineType" id="engineType">

									<option value="petrol"><?php echo pll__('Petrol');?></option>

									<option value="diesel"><?php echo pll__('Diesel');?></option>
									
									<option value="hybrid"><?php echo pll__('Hybrid');?></option>
									
									<option value="electro"><?php echo pll__('Electro');?></option>

								</select>

							</label>
							
							
							<label for="AgeOfCar"><?php echo pll__('date_year');?>

							   <input type="number" min="1980" max="2019" step="1" maxlength="7" name="date_year" id="date_year" placeholder="<?php echo pll__('date_year');?>">

							</label>
							
							
							
							<label for="auction"><?php echo pll__('Selecting an auction'); ?>

							<select name="auction" id="auction">

								<option value="Copart"><?php echo pll__('Copart')?></option>

								<option value="Iaai"><?php echo pll__('IAAI')?></option>

							</select>

						</label>



					


						<label for="sityAuto"><?php echo pll__('City of car purchase');?>

							<select name="sityAuto" id="sityAuto">

								<option value="null"><?php echo pll__('Select a city');?></option>

							</select>

						</label>



						<label for="portArrival"><?php echo pll__('Port of arrival');?>

							<select name="portArrival" id="portArrival">

								<option value="odessa"><?php echo pll__('Odessa');?></option>
								<option value="klajpeda"><?php echo pll__('Klajpeda');?></option>

							</select>

						</label>
							
							
							

							<input type="submit" id="calc_customs" onclick="ga('send', 'event', 'Knopka', 'KalkulyatorTamojnya')" class="btn btn-md" value="<?php echo pll__('Calculate');?>">
							
							


					

					
					


				</div>

			</div>

			

		</div>
	
		
	</div>
	
	<div class="col-md-8">
	
		<div class="white-box box calc">



			<div class="tab-content" id="tabCalc" data-exchange="<?php the_field('exchange', 'currency');?>">

				<div role="tabpanel" class="tab-pane active" id="calc-1">



					<div class="box-body">

						<div class="white-form">
						
						
						




						

							



						</div>

					</div>

					<div class="box-body">

						<div class="result result-customs" id="result" style="display:none;">

							<div class="res-in">
							
								<table class="table table-sm table-striped">
									<tr>
										<td><p><?php echo pll__('Port of dispatch');?></p></td>
										<td style="text-align:right;"><div  id="portDispatch"><p><span class="orange value"></span></p></div></td>
									</tr>
									<tr>
										<td><p>Стоимость авто</p></td>
										<td style="text-align:right;"><div  id="price_lot"><p><span class="orange value"></span></p></div></td>
									</tr>	
									<tr>
										<td><p>Комиссия аукциона</p></td>
										<td style="text-align:right;"><div  id="auctionFee"><p><span class="orange value"></span></p></div><input id="auctionFee_i" type="hidden" name="auctionFee" value=""></td>
									</tr>
									<tr>
										<td><p>Доставка (с площадки аукциона в порт Одесса)<div id="dest_port"> </div></p></td>
										<td style="text-align:right;"><div  id="costDelivery"><p><span class="orange value"></span></p></div></td>
									</tr>
									<tr>
										<td><p><?php echo pll__('Таможенная пошлина (10%)');?></p></td>
										<td style="text-align:right;"><p id="customsDuty" class="orange value"></p></td>
									</tr>
									<tr>
										<td><p>Акциз</p></td>
										<td style="text-align:right;"><p id="exciseTax" class="orange value"></p></td>
									</tr>
									
									<tr>
										<td><p>НДС 20%</p></td>
										<td style="text-align:right;"><p id="VAT" class="orange value"></p></td>
									</tr>
									<tr>
										<td><p>ПРР + экспедиция + брокерские услуги</p></td>
										<td style="text-align:right;"><p id="expedicija" class="orange value"></p></td>
									</tr>
									<tr>
										<td><p>Услуги евротерминала</p></td>
										<td style="text-align:right;"><p id="usl_evroterminala" class="orange value"></p></td>
									</tr>
									
									
									
									<tr>
										<td><p>Услуги нашей компании</p></td>
										<td style="text-align:right;"><p id="uslugi" class="orange value"></p></td>
									</tr>
									
									<tr>
										<td><p>Налоги в пенсионный фонд <span id="pens_fond_proc"></span>% (оплачивается в момент постановки на учет)</p></td>
										<td style="text-align:right;"><p id="pens_fond" class="orange value"></p></td>
									</tr>
									
									<tr>
										<td><p><b>Итоговая стоимость</b></p></td>
										<td style="text-align:right;"><p style="font-weight: bold;" id="totalAmount" class="orange value"></p></td>
									</tr>
									
									
									
									
								</table>
					
							
								<p class="note"><?php echo pll__('* for oversized vehicles, boats, motorcycles, quads or scooters (water), the calculation of delivery is made in a separate order on request.');?></p>
							


							
							
								

							</div>

						</div>

					</div>

				</div>



			</div>

		</div>
	
	</div>
                  	
</div>








