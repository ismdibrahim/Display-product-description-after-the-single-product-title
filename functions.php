add_action('woocommerce_shop_loop_item_title', 'show product_short_description'); 
function product_short_description(){ 
 global $product; 
 if($tmp_desc = $product->get_description()){ 
  echo $tmp_desc; 
 }
}
