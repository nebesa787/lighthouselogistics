<?php global $product; ?>

<div class="box white-box delivery-calc calc">
    <div class="head"><?php echo pll__('Delivery calculator'); ?></div>
    <div class="box-body">
        <div class="white-form">
            <?php $auction = get_field('auction');?>
            <label for="auction"><?php echo pll__('Selecting an auction'); ?>
                <select name="auction" id="auction">
                    <option value="Copart" <?php if($auction=='copart') echo 'selected'; ?>><?php echo pll__('Copart')?></option>
                    <option value="Iaai" <?php if($auction=='iaai') echo 'selected'; ?>><?php echo pll__('IAAI') ?></option>
                </select>
            </label>

            <label for="purchasing"><?php echo pll__('Purchase amount'); ?>, $
                <input type="number" id="purchasing" value="<?php echo $product->get_price();?>">
            </label>

            <label for="cityAuto"><?php echo pll__('City of car purchase');?>
                <select name="cityAuto" id="cityAuto">
                    <?php $city_auto = get_field('city_auto');
                    echo '<option value="'.$city_auto['value'].'">'.$city_auto['label'].'</option>';?>
                </select>
            </label>
            <label for="portArrival"><?php echo pll__('Port of arrival');?>
                <select name="portArrival" id="portArrival">
                    <option value="odessa"><?php echo pll__('Odessa');?></option>
                </select>
            </label>
            <label for="typeVehicle"><?php echo pll__('Type of vehicle');?>
                <select name="typeVehicle" id="typeVehicle">
                    <?php $type_vehicle = get_field('type_vehicle','delivery'); 
                    $sedan_savannah = get_field('sedan_savannah','delivery'); 
                    $sedan_new_jersey = get_field('sedan_new_jersey','delivery'); 
                    $sedan_houston = get_field('sedan_houston','delivery'); 
                    $sedan_los_angeles = get_field('sedan_los_angeles','delivery'); 
                    $pickup_savannah = get_field('pickup_savannah','delivery'); 
                    $pickup_new_jersey = get_field('pickup_new_jersey','delivery'); 
                    $pickup_houston = get_field('pickup_houston','delivery'); 
                    $pickup_los_angeles = get_field('pickup_los_angeles','delivery'); 
                    ?>
                    <option value="" data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==1) echo 'selected';?>><?php echo pll__('Sedan');?></option>

                    <option value=""  data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==2) echo 'selected';?>><?php echo pll__('Wagon');?></option>

                    <option value=""  data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==3) echo 'selected';?>><?php echo pll__('Hatchback');?></option>

                    <option value=""  data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==4) echo 'selected';?>><?php echo pll__('Coupe');?></option>


                    <option value="" data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==5) echo 'selected';?>><?php echo pll__('SUV');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-new_jersey="<?= $pickup_new_jersey?>" data-houston="<?= $pickup_houston?>" data-los_angeles="<?= $pickup_los_angeles?>" <?php if($type_vehicle==6) echo 'selected';?>><?php echo pll__('Minivan');?></option>

                    <option value="" data-savannah="<?= $sedan_savannah?>" data-new_jersey="<?= $sedan_new_jersey?>" data-houston="<?= $sedan_houston?>" data-los_angeles="<?= $sedan_los_angeles?>" <?php if($type_vehicle==7) echo 'selected';?>><?php echo pll__('Crossover');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-new_jersey="<?= $pickup_new_jersey?>" data-houston="<?= $pickup_houston?>" data-los_angeles="<?= $pickup_los_angeles?>" <?php if($type_vehicle==8) echo 'selected';?>><?php echo pll__('Pickup');?></option>

                    <option value="" data-savannah="<?= $pickup_savannah?>" data-new_jersey="<?= $pickup_new_jersey?>" data-houston="<?= $pickup_houston?>" data-los_angeles="<?= $pickup_los_angeles?>" <?php if($type_vehicle==9) echo 'selected';?>><?php echo pll__('Van');?></option>
                </select>
            </label>
            <p class="note"><?php echo pll__('* for oversized vehicles, boats, motorcycles, quads or scooters (water), the calculation of delivery is made in a separate order on request.');?></p>
        </div>
    </div>
    <div class="box-body">
        <div class="result">
            <p class="result-title"><?php echo pll__('Result');?></p>
            <div class="res-in">
                <div class="" id="auctionFee">
                    <p><?php echo pll__('Auction fee');?></p>
                    <p class="orange value" id="auctionFee-val"></p>
                </div>
                <div class="" id="costDelivery">
                    <p><?php echo pll__('Cost of delivery');?></p>
                    <p class="orange value" id="costDelivery-val"></p>
                </div>
                <div class="" id="portDispatch">
                    <p><?php echo pll__('Port of dispatch');?></p>
                    <p class="orange value"></p>
                </div>
            </div>
        </div>
    </div>
</div>