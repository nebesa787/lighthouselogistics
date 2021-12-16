<div class="white-box box calc">

    <div class="head"><?php echo pll__('Calculator of customs clearance');?></div>



    <div class="tab-content" id="tabCalc" data-exchange="<?php the_field('exchange', 'currency');?>">

        <div role="tabpanel" class="tab-pane active" id="calc-1">



            <div class="box-body">

                <div class="white-form">




                    <label for="carPrice"><?php echo pll__('Car cost, $');?></label>
                    <?php if(is_singular('product')):
                        global $product;
                        $val = $product->get_price();
                    else:
                        $val = '';
                    endif;?>
                    <input type="number" name="carPrice" id="carPrice" value="<?php echo $val;?>">

                    <label for="engineCapacity"><?php echo pll__('Engine capacity, cm');?><sup>3</sup>

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

                  <?/*  <label for="AgeOfCar"><?php echo pll__('Age of the car');?>

                        <select name="AgeOfCar" id="AgeOfCar">

                            <option value="5"><?php echo pll__('up to 5 years');?></option>

                            <option value="7"><?php echo pll__('from 5 to 7 years');?></option>

                        </select>

                    </label>
					
					*/?>
					<label for="AgeOfCar"><?php echo pll__('date_year');?>

                       <input type="number" min="1980" max="2019" step="1" maxlength="7" name="date_year" id="date_year" placeholder="<?php echo pll__('date_year');?>">

                    </label>
					
					
					

                    <input type="submit" id="calc_customs" onclick="ga('send', 'event', 'Knopka', 'KalkulyatorTamojnya')" class="btn btn-md" value="<?php echo pll__('Calculate');?>">



                </div>

            </div>

            <div class="box-body">

                <div class="result result-customs" id="result">

                    <div class="res-in">

                        <div>

                            <p><?php echo pll__('Таможенная пошлина (10%)');?></p>

                            <p id="customsDuty" class="orange value"></p>

                        </div>

                        <div>

                            <p><?php echo pll__('Акцизный сбор');?></p>

                            <p id="exciseTax" class="orange value"></p>

                        </div>

                        <div>

                            <p><?php echo pll__('НДС');?></p>

                            <p id="VAT" class="orange value"></p>

                        </div>

                        

                        <div>

                            <p><?php echo pll__('Общая сумма, потраченная вами на приобретение составит');?></p>

                            <p id="totalAmount" class="orange value"></p>

                        </div>
						
						 <div>

                            <p><?php echo pll__('zp8487');?></p>
                            

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>

</div>