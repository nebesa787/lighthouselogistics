<?php global $product; ?>



<?php 

/*
	$file = "/home/america4/public_html/wp-content/themes/lighthouselogistics/Price calc JSON/cityArr.json";

	$handle = fopen($file, 'r');
	$data = fread($handle,filesize($file));
	$array_city = json_decode($data);
	fclose($handle);

*/
?>


<div class="box white-box delivery-calc calc">
    <div class="head"><?php echo pll__('Delivery calculator'); ?></div>
    <div class="box-body">
        <div class="white-form">
            <?php //$auction = get_field('auction');?>
			
			<?php $name_auction = get_the_terms($product->id, 'pa_auction'); ?>
			
            <label for="auction"><?php echo pll__('Selecting an auction'); ?>
                <select name="auction" id="auction">
                    <?php /*<option value="Copart" <?php if($auction=='copart') echo 'selected'; ?>><?php echo pll__('Copart')?></option>
                    <option value="Iaai" <?php if($auction=='iaai') echo 'selected'; ?>><?php echo pll__('IAAI') ?></option>
					*/?>
					
					<option value="Copart" <?php if($name_auction[0]->name=='Copart') echo 'selected'; ?>><?php echo pll__('Copart')?></option>
                    <option value="Iaai" <?php if($name_auction[0]->name=='iaai') echo 'selected'; ?>><?php echo pll__('IAAI') ?></option>
                </select>
            </label>

            <label for="purchasing"><?php echo pll__('Purchase amount'); ?>, $
                <input type="number" id="purchasing" value="<?php echo $product->get_price();?>">
            </label>
			<?php
			 $city = get_the_terms($product->id, 'pa_city');
				
			?>
            <?php /*
			<label for="cityAuto"><?php echo pll__('City of car purchase');?>
                <select name="cityAuto" id="cityAuto">
                    <?php $city_auto = get_field('city_auto');
                    //echo '<option value="'.$city_auto['value'].'">'.$city_auto['label'].'</option>';
					echo '<option value="'.$city[0]->name.'">'.$city[0]->name.'</option>';?>
					?>
                    
                </select>
            </label>
			
			*/?>
			
			<label for="sityAuto"><?php echo pll__('City of car purchase');?>

                <select name="sityAuto" id="sityAuto">
					
					<?php 

						
						$args = array (
							'post_type'              => array( 'dostavka' ),
							'post_status'            => array( 'publish' ),
							'nopaging'               => true,
							'order'                  => 'ASC',
							'orderby'                => 'title',
						);

						
						$dostavka = new WP_Query( $args );
						$dos_inc=1;
						// The Loop
						if ( $dostavka->have_posts() ) {
							while ( $dostavka->have_posts() ) {
								
								$dostavka->the_post();
								$dostavka_city = get_field('city'); 			
								
								?>
								<?php if ( $dostavka_city == $city[0]->name ) {?>
									<option class="sn<?php echo $dos_inc;?>" value="sn<?php echo $dos_inc;?>" selected ><?php the_title();?></option>
								<?php }else{ ?>
									<option class="sn<?php echo $dos_inc;?>" value="sn<?php echo $dos_inc;?>" ><?php the_title();?></option>
								<?php } ?>
								<?php
								$dos_inc++;
							}
						} else {
							// no posts found
						}
						wp_reset_postdata();

					?>
				
				
 			 <?/*
					<?php $ii=0;?>
					<?php foreach($array_city as $city_temp){?>
						<?php foreach($city_temp as $item_city){?>
							<?php $ii++;?>
							<?php if($ii>1){?>
								<?php if ( $item_city[1] == $city[0]->name ) {?>
									<option class="<?php echo $item_city[0];?>" value="<?php echo $item_city[0];?>" selected ><?php echo $item_city[1];?></option>
								<?php }else{ ?>
									<option class="<?php echo $item_city[0];?>" value="<?php echo $item_city[0];?>" ><?php echo $item_city[1];?></option>
								<?php } ?>
								
							<?php } ?>
						<?php } ?>
						
					
						
					<?php } ?>

*/?>
                </select>

            </label>
			
			
			
            <label for="portArrival"><?php echo pll__('Port of arrival');?>
                <select name="portArrival" id="portArrival">
                    <option value="odessa"><?php echo pll__('Odessa');?></option>
					<option value="klajpeda"><?php echo pll__('Klajpeda');?></option>
                </select>
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
					
					
					
                    <option value="" data-savannah="<?= $sedan_savannah?>" data-savannah_klajpeda="<?= $sedan_savannah_klajpeda?>" data-new_jersey="<?= $sedan_new_jersey?>" data-new_jersey_klajpeda="<?= $sedan_new_jersey_klajpeda?>" data-houston="<?= $sedan_houston?>" data-houston_klajpeda="<?= $sedan_houston_klajpeda?>" data-los_angeles="<?= $sedan_los_angeles?>" data-los_angeles_klajpeda="<?= $sedan_los_angeles_klajpeda?>" data-seattle="<?= $sedan_seattle?>" data-seattle_klajpeda="<?= $sedan_seattle_klajpeda?>" <?php if($type_vehicle==1) echo 'selected';?>><?php echo pll__('Sedan');?></option>

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