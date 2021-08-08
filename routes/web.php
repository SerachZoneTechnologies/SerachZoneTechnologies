<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function() {
    return view('home_page');
});
Route::get('/fruits', function(){
    return view('categories.fruits.fruits_show');
});
Route::get('/apple-categories', function(){
    return view('categories.fruits.apple.apple_show');
});
Route::get('/banana-categories', function(){
    return view('categories.fruits.banana.banana_show');
});
Route::get('/mango-categories', function(){
    return view('categories.fruits.mango.mango_show');
});
Route::get('/guava-categories', function(){
    return view('categories.fruits.guava.guava_show');
});
Route::get('/grapes-categories', function(){
    return view('categories.fruits.grapes.grapes_show');
});
Route::get('/papaya-categories', function(){
    return view('categories.fruits.papaya.papaya_show');
});
Route::get('/snacks', function(){
    return view('categories.snacks.snacks_show');
});
Route::get('/biscuits-categories', function(){
    return view('categories.snacks.biscuits_show');
});
Route::get('/crisps-categories', function(){
    return view('categories.snacks.crisps_show');
});
Route::get('/namkeen-categories', function(){
    return view('categories.snacks.namkeen_show');
});
Route::get('/hygienic', function(){
    return view('categories.hygienic.hygienic_show');
});
Route::get('/skincare-categories', function(){
    return view('categories.hygienic.skincare_show');
});
Route::get('/haircare-categories', function(){
    return view('categories.hygienic.haircare_show');
});
Route::get('/oralcare-categories', function(){
    return view('categories.hygienic.oralcare_show');
});
Route::get('/fragrance-categories', function(){
    return view('categories.hygienic.fragrances_show');
});
Route::get('/handwash-categories', function(){
    return view('categories.hygienic.handwash_show');
});
Route::get('/bath-categories', function(){
    return view('categories.hygienic.bath_show');
});
Route::get('/laundry-detergents-categories', function(){
    return view('categories.hygienic.laundry_detergents_show');
});
Route::get('/vegetables-categories', function(){
    return view('categories.vegetables.vegetables_show');
});
Route::get('/potato-categories', function(){
    return view('categories.vegetables.potato_show');
});
Route::get('/onion-categories', function(){
    return view('categories.vegetables.onion_show');
});
Route::get('/tomato-categories', function(){
    return view('categories.vegetables.tomato_show');
});
Route::get('/brinjal-categories', function(){
    return view('categories.vegetables.brinjal_show');
});
Route::get('/root-vegetables-categories', function(){
    return view('categories.vegetables.root_vegetables_show');
});
Route::get('/leafy-vegetables-categories', function(){
    return view('categories.vegetables.leafy_vegetables_show');
});
Route::get('/dal-varieties', function(){
    return view('categories.dal_varieties.dal_varieties_show');
});
Route::get('/bakery-categories', function(){
    return view('categories.bakery.bakery_show');
});
Route::get('/oil-categories', function(){
    return view('categories.oils.oils_show');
});
Route::get('/cooking-oil-categories', function(){
    return view('categories.oils.cooking_oil_show');
});
Route::get('/lamp-oil-categories', function(){
    return view('categories.oils.lamp_oil_show');
});
Route::get('/ghee-categories', function(){
    return view('categories.oils.ghee_show');
});
Route::get('/beverage-categories', function(){
    return view('categories.beverages.beverages_show');
});
Route::get('/pet-food-categories', function(){
    return view('categories.pets.pets_show');
});
Route::get('/dog-food-categories', function(){
    return view('categories.pets.dog_food_show');
});
Route::get('/cat-food-categories', function(){
    return view('categories.pets.cat_food_show');
});
Route::get('/kitchen-categories', function(){
    return view('categories.kitchen.kitchen_show');
});
Route::get('/kitchen-vessels-categories', function(){
    return view('categories.kitchen.kitchen_vessels_show');
});
Route::get('/tools-and-accessories', function(){
    return view('categories.kitchen.other_tools');
});
Route::get('/baby-care-categories', function(){
    return view('categories.baby_care.baby_care_show');
});
Route::get('/bath-and-skincare-categories', function(){
    return view('categories.baby_care.bath_and_skin_care_show');
});
Route::get('/bathing-categories', function(){
    return view('categories.baby_care.bathing_show');
});
Route::get('/baby-oral-care-categories', function(){
    return view('categories.baby_care.baby_oralcare_show');
});
Route::get('/baby-skin-care-categories', function(){
    return view('categories.baby_care.baby_skincare_show');
});
Route::get('/baby-gift-packs-categories', function(){
    return view('categories.baby_care.baby_gift_packs_show');
});
Route::get('/baby-ear-and-nose-care-categories', function(){
    return view('categories.baby_care.baby_ear_nose_care_show');
});
Route::get('/baby-nail-care-categories', function(){
    return view('categories.baby_care.baby_nail_care_show');
});
Route::get('/baby-bath-toys-categories', function(){
    return view('categories.baby_care.baby_bath_toys_show');
});
Route::get('/baby-body-washes-categories', function(){
    return view('categories.baby_care.baby_body_washes_show');
});
Route::get('/baby-hair-care-categories', function(){
    return view('categories.baby_care.baby_hair_care_show');
});
Route::get('/baby-diapers-wipes-categories', function(){
    return view('categories.baby_care.baby_diapers_show');
});
Route::get('/baby-feeding-supplies-categories', function(){
    return view('categories.baby_care.baby_feeding_supplies_show');
});
Route::get('/baby-bed-set-categories', function(){
    return view('categories.baby_care.baby_bed_set_show');
});
Route::get('/baby-foods-categories', function(){
    return view('categories.baby_care.baby_foods_show');
});
Route::get('/food-grain-categories', function(){
    return view('categories.food_grains.food_grain_show');
});
Route::get('/rice-categories', function(){
    return view('categories.food_grains.rice.rice_show');
});
Route::get('/briyani-rice-categories', function(){
    return view('categories.food_grains.rice.briyani_rice_show');
});
Route::get('/boiled-rice-categories', function(){
    return view('categories.food_grains.rice.boiled_rice_show');
});
Route::get('/broken-rice-categories', function(){
    return view('categories.food_grains.rice.broken_rice_show');
});
Route::get('/idly-rice-categories', function(){
    return view('categories.food_grains.rice.idly_rice_show');
});
Route::get('/red-rice-categories', function(){
    return view('categories.food_grains.rice.red_rice_show');
});
Route::get('/whole-spices-categories', function(){
    return view('categories.food_grains.whole_spices_show');
});
Route::get('/powdered-spices-categories', function(){
    return view('categories.food_grains.powdered_spices_show');
});
Route::get('/millet-categories', function(){
    return view('categories.food_grains.millet_show');
});
Route::get('/atta-categories', function(){
    return view('categories.food_grains.atta.atta_show');
});
