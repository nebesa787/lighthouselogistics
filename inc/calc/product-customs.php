<?php global $product; ?>
<div class="white-box box calc">

    <div class="head"><?php echo pll__('Calculator of customs clearance'); ?></div>
    <div class="tab-content" id="tabCalc" data-exchange="<?php the_field('exchange', 'currency'); ?>">
        <div role="tabpanel" class="tab-pane active" id="calc-1">
            <div class="box-body">
                <div class="white-form">
                    <? /*<label for="carPrice"><?php echo pll__('Car cost, $'); ?></label>

                    <input type="number" name="carPrice" id="carPrice" value="<?php echo $product->get_price(); ?>">*/?>
					<?php 
						$obem = get_the_terms($product->id, 'pa_obem');
						$objem = str_replace('L', '', $obem[0]->name);
					?>

                    <label for="engineCapacity"><?php echo pll__('Engine capacity, cm'); ?><sup>3</sup>

                        <?php $engineCapacity = array('500' => '0.5', '600' => '0.6', '700' => '0.7', '800' => '0.8', '900' => '0.9', '1000' => '1.0', '1100' => '1.1', '1200' => '1.2', '1300' => '1.3', '1400' => '1.4', '1500' => '1.5', '1600' => '1.6', '1700' => '1.7', '1800' => '1.8', '1900' => '1.9', '2000' => '2.0', '2100' => '2.1', '2200' => '2.2', '2300' => '2.3', '2400' => '2.4', '2500' => '2.5', '2600' => '2.6', '2700' => '2.7', '2800' => '2.8', '2900' => '2.9', '3000' => '3.0', '3100' => '3.1', '3200' => '3.2', '3300' => '3.3', '3400' => '3.4', '3500' => '3.5', '3600' => '3.6', '3700' => '3.7', '3800' => '3.8', '3900' => '3.9', '4000' => '4.0', '4100' => '4.1', '4200' => '4.2', '4300' => '4.3', '4400' => '4.4', '4500' => '4.5', '4600' => '4.6', '4700' => '4.7', '4800' => '4.8','4900' => '4.9','5000' => '5.0','5100' => '5.1','5200' => '5.2','5300' => '5.3','5400' => '5.4','5500' => '5.5',); ?>

                        <select id="engineCapacity">

                            <?php //$engine_capacity = get_field('engine_capacity');
								
                            foreach ($engineCapacity as $value => $label):
                                echo '<option value="' . $value . '" ' . ($label == $objem ? 'selected' : '') . '>' . $label . '</option>';
                            endforeach; ?>

                        </select>
                    </label>
                    <label for="engineType"><?php echo pll__('Engine type'); ?>
                        <?php $engine_type = get_field('engine_type'); ?>
                        <select name="engineType" id="engineType">
                            <option value="petrol" <?php if($engine_type==1) echo 'selected';?>><?php echo pll__('Petrol'); ?></option>
                            <option value="diesel" <?php if($engine_type==2) echo 'selected';?>><?php echo pll__('Diesel'); ?></option>
                            <option value="hybrid" <?php if($engine_type==3) echo 'selected';?>><?php echo pll__('Hybrid'); ?></option>
                            <option value="electro" <?php if($engine_type==4) echo 'selected';?>><?php echo pll__('Electro'); ?></option>
                        </select>
                    </label>
					<label for="AgeOfCar"><?php echo pll__('date_year');?>
<?php global $product;
   $god = get_the_terms($product->id, 'pa_god');
		
	

?>
                       <input type="number" min="1980" max="2019" step="1" maxlength="7" name="date_year" id="date_year" value="<?php echo $god[0]->name; ?>" placeholder="<?php echo pll__('date_year');?>">

                    </label>
                    
                </div>
            </div>
            <div class="box-body">
                <div class="result result-customs" id="result">
                    <div class="res-in">
                        <div>
                            <p><?php echo pll__('Таможенная пошлина (10%)'); ?></p>
                            <input id="comis_auction" style="diplay:none;" name="comis_auction" type="hidden">
                            <p id="customsDuty" class="orange value"></p>
                        </div>
                        <div>
                            <p><?php echo pll__('Акцизный сбор'); ?></p>
                            <p id="exciseTax" class="orange value"></p>
                        </div>
                        <div>
                            <p><?php echo pll__('НДС'); ?></p>
                            <p id="VAT" class="orange value"></p>
                        </div>
                        
                        <div>
                            <p><?php echo pll__('Общая сумма, потраченная вами на приобретение составит'); ?></p>
                            <p id="totalAmount" class="orange value"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>