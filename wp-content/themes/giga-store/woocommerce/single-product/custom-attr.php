<?php
/**
 * Single Product custom-attr
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/custom-attr.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$productlenght = get_field('productlenght');
$productwidth = get_field('productwidth');
$productheight = get_field('productheight');
$productinnerlength = get_field('productinnerlength');
$productinnerwidth = get_field('productinnerwidth');
$productinnerheight = get_field('productinnerheight');
$productweight = get_field('productweight');
$productvolumn = get_field('productvolumn');
$productmodel = get_field('productmodel');
$productfoldedheight = get_field('productfoldedheight');
$staticload = get_field('staticload');
$dynamicload = get_field('dynamicload');
$mmtoinch = 0.03937;
$kgtolbs = 2.20462262;
$ltogal = 0.26417;
if (!$productmodel) {
    $productmodel = "N/A";
}

if (!$productfoldedheight || $productfoldedheight == NULL || $productfoldedheight == "NULL") {
    $displayFoldedHeight = "none";
}else{
	$displayFoldedHeight = "";
}

if (!$productinnerlength) {
    $displayInternalDimensions = "none";
}else{
	$displayInternalDimensions = "";
}

if (!$staticload) {
    $displayStaticLoad = "none";
}else{
	$displayStaticLoad = "";
}

if (!$dynamicload) {
    $displayDynamicLoad = "none";
}else{
	$displayDynamicLoad = "";
}

if (!$productvolumn) {
    $displayVolumn = "none";
}else{
	$displayVolumn = "";
}

echo ' 
	<table class="table table-hover table-bordered single-product-attr">
		 <caption><h3 class="pull-left">Specifications</h3>
		 		<button class="btn btn-danger pull-right product-inquiry">Request a Free Quote</button>
 		</caption>
	    <tbody>
	    	<tr>
					<td><h4>Product Model</h4></td>
					<td class="product-model">
						<span class="mm pull-left value" data-value="'.$productmodel.'">'. $productmodel .'</span>
					</td>
	    	</tr>
	      <tr>
	      	<td><h4>External Dimensions</h4></td>
	      	<td class="external-dimension">
	      		<span class="mm pull-left value">' .$productlenght .'X'. $productwidth  .'X'. $productheight . '</span>
	      		<span class="pull-right">mm</span>
	      		<hr>      	
	      		<span class="inch pull-left value">'. round($productlenght*$mmtoinch,2) .'X'.round($productwidth*$mmtoinch,2) .'X'. round($productheight*$mmtoinch,2) .'</span>
	      		<span class="pull-right">in</span>
	      	</td>
				</tr>
				';

				if($displayInternalDimensions != "none"){
					echo '
						<tr>
							<td><h4>Internal Dimensions</h4></td>
							<td class="internal-dimension">
								<span class="mm pull-left value">
									' . $productinnerlength .'X'. $productinnerwidth .'X'. $productinnerheight . '
								</span>
								<span class="pull-right">mm</span>
								<hr>	        
								<span class="inch pull-left value">
									'. round($productinnerlength*$mmtoinch,2) .'X'. round($productinnerwidth*$mmtoinch,2) .'X'. round($productinnerheight*$mmtoinch,2) .'
								</span>
								<span class="pull-right">in</span>
							</td>
						</tr>
					';
				}
				if($displayFoldedHeight != "none"){
					echo '
					<tr>
						<td><h4>Folded Height</h4></td>
						<td>
							<span class="folded-height pull-left value">
									'. $productfoldedheight .'
							</span>
							<span class="pull-right">mm</span>
							<hr>	        
							<span class="in pull-left value">
								'. round($productfoldedheight*$mmtoinch,2) .'
							</span>
							<span class="pull-right">in</span>
						</td>
					</tr>
					';
				}
				if($displayStaticLoad != "none"){
					echo '
					<tr>
						<td><h4>Static Load Weight</h4></td>
						<td>
							<span class="folded-height pull-left value">
									'. $staticload .'
							</span>
							<span class="pull-right">T</span>
						</td>
					</tr>
					';
				}
	      if($displayDynamicLoad != "none"){
					echo '
						<tr>
							<td><h4>Dynamic Load Weight</h4></td>
							<td>
								<span class="folded-height pull-left value">
										'. $dynamicload .'
								</span>
								<span class="pull-right">T</span>
							</td>
						</tr>
					';
				}
	      echo '
					<tr>
						<td><h4>Weight</h4></td>
						<td class="internal-dimension">
							<span class="kg pull-left value">
								'. $productweight .'
							</span>
							<span class="pull-right">kg</span>
							<hr>	        
							<span class="lbs pull-left value">
								'. round($productweight*$kgtolbs,2) .'
							</span>
							<span class="pull-right">lbs</span>
						</td>
					</tr>
					';
					if($displayVolumn != "none"){
						echo '
						<tr style="display:'. $displayVolumn .'">
							<td><h4>Volumn</h4></td>
							<td class="internal-dimension">
								<span class="liters pull-left value">
									'. $productvolumn .'
								</span>
								<span class="pull-right">Liters</span>
								<hr>	        
								<span class="gallon pull-left value">
									'. round($productvolumn*$ltogal,2) .'
								</span>
								<span class="pull-right">Us gallon</span>
							</td>
						</tr>
						';
					}

			echo '	
	    </tbody>
  	</table>';


  ?>