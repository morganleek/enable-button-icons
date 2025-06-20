<?php
/**
 * Plugin Name:         Enable Button Icons
 * Plugin URI:          https://www.nickdiego.com/
 * Description:         Easily add icons to Button blocks.
 * Version:             0.2.1
 * Requires at least:   6.3
 * Requires PHP:        7.4
 * Author:              Nick Diego
 * Author URI:          https://www.nickdiego.com
 * License:             GPLv2
 * License URI:         https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain:         enable-button-icons
 * Domain Path:         /languages
 *
 * @package enable-button-icons
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function create_block_enable_button_icons_block_init() {
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}

	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
		
	}
}
add_action( 'init', 'create_block_enable_button_icons_block_init' );

function enable_button_icons_icons() {
	$icons = [
		[
			'label' => 'Arrow Left',
			'icon' 	=> "<svg width='16' height='11' viewBox='0 0 16 11' xmlns='http://www.w3.org/2000/svg'><polygon points='16 4.7 2.88198758 4.7 6.55900621 1 5.56521739 0 0 5.5 5.56521739 11 6.55900621 10 2.88198758 6.3 16 6.3'></polygon></svg>",
			'width' => '16',
			'height' => '11',
			'value' => 'arrow-left'
		],
		[
			'label' => 'Arrow Right',
			'icon' 	=> "<svg width='16' height='11' viewBox='0 0 16 11' xmlns='http://www.w3.org/2000/svg'><polygon points='0 4.7 13.1180124 4.7 9.44099379 1 10.4347826 0 16 5.5 10.4347826 11 9.44099379 10 13.1180124 6.3 0 6.3'></polygon></svg>",
			'width' => '16',
			'height' => '11',
			'value' => 'arrow-right'
		],
		[
			'label' => 'Chevron Left',
			'icon' 	=> "<svg width='10' height='18' viewBox='0 0 10 18' xmlns='http://www.w3.org/2000/svg'><polygon points='8.18181818 0 10 1.5 3.03030303 9 10 16.5 8.18181818 18 0 9'></polygon></svg>",
			'width' => '10',
			'height' => '18',
			'value' => 'chevron-left'
		],
		[
			'label' => 'Chevron Left Small',
			'icon' 	=> "<svg width='7' height='12' viewBox='0 0 7 12' xmlns='http://www.w3.org/2000/svg'><polygon points='5.25057985 0 0 5.99997743 5.25057985 12 7 10.5313252 3.03456266 5.99997743 7 1.46865977'></polygon></svg>",
			'width' => '7',
			'height' => '12',
			'value' => 'chevron-left-small'
		],
		[
			'label' => 'Chevron Right',
			'icon' 	=> "<svg width='10' height='18' viewBox='0 0 10 18' xmlns='http://www.w3.org/2000/svg'><polygon points='1.81818182 0 0 1.5 6.96969697 9 0 16.5 1.81818182 18 10 9'></polygon></svg>",
			'width' => '10',
			'height' => '18',
			'value' => 'chevron-right'
		],
		[
			'label' => 'Chevron Right Small',
			'icon' 	=> "<svg width='7' height='12' viewBox='0 0 7 12' xmlns='http://www.w3.org/2000/svg'><polygon points='1.74942015 0 7 5.99997743 1.74942015 12 0 10.5313252 3.96543734 5.99997743 0 1.46865977'></polygon></svg>",
			'width' => '7',
			'height' => '12',
			'value' => 'chevron-right-small'
		],
		[
			'label' => 'Cloud',
			'icon' 	=> "<svg width='16' height='11' viewBox='0 0 16 11' xmlns='http://www.w3.org/2000/svg'><path d='M13.3787444,4.44036697 C13.3787444,1.91743119 11.2663111,0 8.55032538,0 C6.33729999,0 4.42605079,1.41284404 3.92309047,3.33027523 L3.72190634,3.33027523 C1.71006508,3.33027523 0,5.04587156 0,7.16513761 C0,9.28440367 1.71006508,11 3.72190634,11 L12.775192,11 C14.5858492,11 15.9941381,9.48623853 15.9941381,7.66972477 C16.0947301,6.05504587 14.8876254,4.74311927 13.3787444,4.44036697 L13.3787444,4.44036697 Z M12.8757841,9.58715596 L3.82249841,9.58715596 C2.61539365,9.58715596 1.60947301,8.47706422 1.60947301,7.26605505 C1.60947301,6.05504587 2.61539365,4.8440367 3.82249841,4.8440367 L5.13019523,4.8440367 L5.43197142,3.73394495 C5.83433967,2.42201835 7.1420365,1.51376147 8.65091745,1.51376147 C10.4615746,1.51376147 11.9704555,2.82568807 11.9704555,4.44036697 L11.9704555,5.75229358 L13.2781524,5.95412844 C14.0828889,6.05504587 14.6864412,6.86238532 14.6864412,7.7706422 C14.5858492,8.77981651 13.7811127,9.58715596 12.8757841,9.58715596 Z'></path></svg>",
			'width' => '16',
			'height' => '11',
			'value' => 'cloud'
		],
		[
			'label' => 'Cloud Upload',
			'icon' 	=> "<svg width='16' height='11' viewBox='0 0 16 11' xmlns='http://www.w3.org/2000/svg'><path d='M13.3,4.4 C13.3,1.9 11.2,-1.24344979e-14 8.5,-1.24344979e-14 C6.3,-1.24344979e-14 4.4,1.4 3.9,3.3 L3.7,3.3 C1.7,3.3 1.95399252e-14,5 1.95399252e-14,7.1 C1.95399252e-14,9.2 1.7,10.9 3.7,10.9 L12.7,10.9 C14.5,10.9 15.9,9.4 15.9,7.6 C16,6 14.8,4.7 13.3,4.4 L13.3,4.4 Z M12.8,9.5 L8.8,9.5 L8.8,7.1 L10,8.3 L11,7.3 L8,4.3 L5,7.3 L6,8.3 L7.2,7.1 L7.2,9.5 L3.7,9.5 C2.5,9.5 1.5,8.4 1.5,7.2 C1.5,6 2.5,4.8 3.7,4.8 L5,4.8 L5.3,3.7 C5.7,2.4 7,1.5 8.5,1.5 C10.3,1.5 11.8,2.8 11.8,4.4 L11.8,5.7 L13.1,5.9 C13.9,6 14.5,6.8 14.5,7.7 C14.5,8.7 13.7,9.5 12.8,9.5 L12.8,9.5 Z'></path></svg>",
			'width' => '16',
			'height' => '11',
			'value' => 'cloud-upload'
		],
		[
			'label' => 'Comment Author Avatar',
			'icon' 	=> "<svg width='16' height='16' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 Z M10,10.75 L6,10.75 C5.31,10.75 4.75,11.31 4.75,12 L4.75,13.63 C5.73765837,14.2015236 6.85890165,14.5016718 8,14.5000138 C9.14109835,14.5016718 10.2623416,14.2015236 11.25,13.63 L11.25,12 C11.25,11.31 10.69,10.75 10,10.75 Z M12.5437324,3.35187647 C10.0177861,0.882628059 5.9822139,0.882628059 3.45626762,3.35187647 C0.93032134,5.82112489 0.83872177,9.8556574 3.25,12.437 L3.25,12 C3.25,10.4812169 4.48121694,9.25 5.99999011,9.25 L9.99999011,9.25 C11.5187831,9.25 12.75,10.4812169 12.75,12 L12.75,12.437 C15.1612782,9.8556574 15.0696787,5.82112489 12.5437324,3.35187647 Z M8,4 C9.1045695,4 10,4.8954305 10,6 C10,7.1045695 9.1045695,8 8,8 C6.8954305,8 6,7.1045695 6,6 C6,4.8954305 6.8954305,4 8,4 Z'></path></svg>",
			'width' => '16',
			'height' => '16',
			'value' => 'comment-author-avatar'
		],
		[
			'label' => 'Download',
			'icon' 	=> "<svg width='16' height='17' viewBox='0 0 16 17' xmlns='http://www.w3.org/2000/svg'><path d='M14,8.3 L13,7.2 L9,11.2 L9,0 L7.5,0 L7.5,11.3 L3,7.2 L2,8.3 L8.2,14.1 L14,8.3 L14,8.3 Z M14.5,12 L14.5,15.5 L1.5,15.5 L1.5,12 L0,12 L0,17 L16,17 L16,12 L14.5,12 Z'></path></svg>",
			'width' => '16',
			'height' => '17',
			'value' => 'download'
		],
		[
			'label' => 'External',
			'icon' 	=> "<svg width='15' height='15' viewBox='0 0 15 15' xmlns='http://www.w3.org/2000/svg'><path d='M15,0 L8,0 L8,1.5 L12.44,1.5 L6.47,7.47 L7.53,8.53 L13.5,2.56 L13.5,7 L15,7 L15,0 Z M2,1 C0.8954305,1 0,1.8954305 0,3 L0,13 C0,14.1045695 0.8954305,15 2,15 L12,15 C13.1045695,15 14,14.1045695 14,13 L14,10 L12.5,10 L12.5,13 C12.5,13.2761424 12.2761424,13.5 12,13.5 L2,13.5 C1.72385763,13.5 1.5,13.2761424 1.5,13 L1.5,3 C1.5,2.72385763 1.72385763,2.5 2,2.5 L5,2.5 L5,1 L2,1 Z'></path></svg>",
			'width' => '15',
			'height' => '15',
			'value' => 'external'
		],
		[
			'label' => 'External Arrow',
			'icon' 	=> "<svg width='12' height='12' viewBox='0 0 12 12' xmlns='http://www.w3.org/2000/svg'><polygon points='12 0 2.15240328 0 2.15240328 2.1101993 8.3985932 2.1101993 0 10.5087925 1.4912075 12 9.8898007 3.6014068 9.8898007 9.84759672 12 9.84759672'></polygon></svg>",
			'width' => '12',
			'height' => '12',
			'value' => 'external-arrow'
		],
		[
			'label' => 'Help',
			'icon' 	=> "<svg width='16' height='16' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M8,1.37142857 C5.63183949,1.37142857 3.44356893,2.63482711 2.25948867,4.68571426 C1.07540841,6.73660141 1.07540841,9.26339859 2.25948867,11.3142857 C3.44356893,13.3651729 5.63183949,14.6285714 8,14.6285714 C11.6608589,14.6285714 14.6285713,11.6608589 14.6285713,8 C14.6285713,4.33914113 11.6608589,1.37142857 8,1.37142857 Z M0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 C3.581722,16 0,12.418278 0,8 Z M8,5.02857143 C8.72564752,5.03138642 9.32350762,5.59898692 9.36397433,6.32351069 C9.40444104,7.04803446 8.87350647,7.67868136 8.15268571,7.76228571 C7.72754286,7.80982857 7.31428571,8.16457143 7.31428571,8.68571429 L7.31428571,9.82857143 L8.68571429,9.82857143 L8.68571429,9.056 C10.0658081,8.69966131 10.9429771,7.34564321 10.704046,5.94045706 C10.465115,4.53527091 9.18971942,3.5472645 7.76941052,3.66709276 C6.34910163,3.78692102 5.25726757,4.97464525 5.25714286,6.4 L6.62857143,6.4 C6.62857143,5.64258091 7.24258091,5.02857143 8,5.02857143 Z M7.31428571,10.7428571 L7.31428571,12.1142857 L8.68571429,12.1142857 L8.68571429,10.7428571 L7.31428571,10.7428571 Z'></path></svg>",
			'width' => '16',
			'height' => '16',
			'value' => 'help'
		],
		[
			'label' => 'Info',
			'icon' 	=> "<svg width='16' height='16' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M8,0 C3.63636364,0 0,3.54545455 0,8 C0,12.3636364 3.54545455,16 8,16 C12.3636364,16 16,12.4545455 16,8 C16,3.63636364 12.3636364,0 8,0 L8,0 Z M8,14.5454545 C4.36363636,14.5454545 1.45454545,11.5454545 1.45454545,8 C1.45454545,4.36363636 4.36363636,1.45454545 8,1.45454545 C11.6363636,1.45454545 14.5454545,4.45454545 14.5454545,8 C14.5454545,11.6363636 11.6363636,14.5454545 8,14.5454545 Z M7.2,12.5454545 L8.8,12.5454545 L8.8,7.09090909 L7.2,7.09090909 L7.2,12.5454545 Z M7.2,5.05454545 L8.8,5.05454545 L8.8,3.45454545 L7.2,3.45454545 L7.2,5.05454545 Z'></path></svg>",
			'width' => '16',
			'height' => '16',
			'value' => 'info'
		],
		[
			'label' => 'Lock Outline',
			'icon' 	=> "<svg width='12' height='17' viewBox='0 0 12 17' xmlns='http://www.w3.org/2000/svg'><path d='M11,6.88095238 L9.8,6.88095238 L9.8,3.8452381 C9.8,1.7202381 8.1,0 6,0 C3.9,0 2.2,1.7202381 2.2,3.8452381 L2.2,6.88095238 L1,6.88095238 C0.4,6.88095238 0,7.28571429 0,7.89285714 L0,15.9880952 C0,16.5952381 0.4,17 1,17 L11,17 C11.6,17 12,16.5952381 12,15.9880952 L12,7.89285714 C12,7.28571429 11.6,6.88095238 11,6.88095238 Z M3.8,3.8452381 C3.8,2.63095238 4.8,1.61904762 6,1.61904762 C7.2,1.61904762 8.2,2.63095238 8.2,3.8452381 L8.2,6.88095238 L3.8,6.88095238 L3.8,3.8452381 Z M10.5,15.4821429 L1.5,15.4821429 L1.5,8.39880952 L10.5,8.39880952 L10.5,15.4821429 Z'></path></svg>",
			'width' => '12',
			'height' => '17',
			'value' => 'lock-outline'
		],
		[
			'label' => 'Login',
			'icon' 	=> "<svg width='14' height='14' viewBox='0 0 14 14' xmlns='http://www.w3.org/2000/svg'><path d='M6.08695652,9.5 L7.20289855,10.6 L10.2463768,7.6 L10.7536232,7.1 L10.1449275,6.5 L7.10144928,3.5 L6.08695652,4.5 L7.8115942,6.2 L0,6.2 L0,7.7 L7.8115942,7.7 L6.08695652,9.5 Z M11.9710145,0 L4.86956522,0 C3.75362319,0 2.84057971,0.9 2.84057971,2 L2.84057971,3.5 L4.36231884,3.5 L4.36231884,2 C4.36231884,1.7 4.56521739,1.5 4.86956522,1.5 L11.9710145,1.5 C12.2753623,1.5 12.4782609,1.7 12.4782609,2 L12.4782609,12 C12.4782609,12.3 12.2753623,12.5 11.9710145,12.5 L4.86956522,12.5 C4.56521739,12.5 4.36231884,12.3 4.36231884,12 L4.36231884,10.5 L2.84057971,10.5 L2.84057971,12 C2.84057971,13.1 3.75362319,14 4.86956522,14 L11.9710145,14 C13.0869565,14 14,13.1 14,12 L14,2 C14,0.9 13.0869565,0 11.9710145,0 Z'></path></svg>",
			'width' => '14',
			'height' => '14',
			'value' => 'login'
		],
		[
			'label' => 'Next',
			'icon' 	=> "<svg width='13' height='12' viewBox='0 0 13 12' xmlns='http://www.w3.org/2000/svg'><path d='M1.2,0 L2.22044605e-14,1 L4.5,6 L2.22044605e-14,11 L1.1,12 L6.6,6 L1.2,0 Z M7.2,0 L6.1,1 L10.6,6 L6.1,11 L7.2,12 L12.7,6 L7.2,0 L7.2,0 Z'></path></svg>",
			'width' => '13',
			'height' => '12',
			'value' => 'next'
		],
		[
			'label' => 'Previous',
			'icon' 	=> "<svg width='13' height='12' viewBox='0 0 13 12' xmlns='http://www.w3.org/2000/svg'><path d='M11.5,0 L12.7,1 L8.2,6 L12.7,11 L11.6,12 L6.1,6 L11.5,0 Z M5.5,0 L6.6,1 L2.1,6 L6.6,11 L5.5,12 L2.30926389e-14,6 L5.5,0 Z'></path></svg>",
			'width' => '13',
			'height' => '12',
			'value' => 'previous'
		],
		[
			'label' => 'Shuffle',
			'icon' 	=> "<svg width='16' height='16' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M13.1369889,2.76840729 L11.4221697,1.05557976 L12.4777494,0 L16,3.51527977 L12.4777494,7.03055953 L11.4221697,5.97497977 L13.1379847,4.26215224 L9.96128711,4.26215224 C9.36179747,4.26215224 8.97242796,4.46330989 8.68662476,4.75807556 C8.3789133,5.07574532 8.15086824,5.54677289 7.99452294,6.1353084 C7.86506504,6.62127342 7.77344868,7.15404245 7.69975727,7.63701998 C7.66589905,8.29825107 7.58424099,9.04412772 7.39802079,9.74519201 C7.20582561,10.4631854 6.88716002,11.2060746 6.33447439,11.7766851 C5.76187216,12.3682081 4.98114147,12.7267069 3.98730317,12.7267069 L0,12.7267069 L0,11.232962 L3.98630734,11.232962 C4.58480115,11.232962 4.97516649,11.0318043 5.26096969,10.7370387 C5.56768532,10.4193689 5.79672621,9.94834132 5.95307151,9.35980581 C6.10145018,8.80512852 6.16817078,8.27136366 6.23987054,7.70473642 L6.27870791,7.39602913 C6.32112368,6.84051422 6.41175346,6.28973838 6.54957366,5.7499222 C6.74176884,5.03093297 7.06043443,4.28903965 7.61212423,3.71842908 C8.18572229,3.12690608 8.96645298,2.76840729 9.96029128,2.76840729 L13.1369889,2.76840729 L13.1369889,2.76840729 Z M3.98730317,2.76840729 C4.78396714,2.76840729 5.44121491,2.99744819 5.96701313,3.39378851 C5.68290358,3.82697693 5.45407907,4.29399304 5.28586544,4.78396714 C5.27798753,4.77525513 5.27002047,4.76662415 5.26196552,4.75807556 C4.97616232,4.46330989 4.58579698,4.26215224 3.98730317,4.26215224 L0,4.26215224 L0,2.76840729 L3.98630734,2.76840729 L3.98730317,2.76840729 Z M8.66272484,10.7111471 C8.50239622,11.168233 8.28430945,11.6472272 7.98157715,12.1013257 C8.50637954,12.4966702 9.16462314,12.7267069 9.96128711,12.7267069 L13.1379847,12.7267069 L11.4231655,14.4395344 L12.4787453,15.4951142 L16,11.9798344 L12.4777494,8.46455468 L11.4221697,9.52013444 L13.1379847,11.232962 L9.96128711,11.232962 C9.36179747,11.232962 8.97242796,11.0318043 8.68662476,10.7370387 C8.67858038,10.7284802 8.67061341,10.7198493 8.66272484,10.7111471 L8.66272484,10.7111471 Z'></path></svg>",
			'width' => '16',
			'height' => '16',
			'value' => 'shuffle'
		],
		[
			'label' => 'Wordpress',
			'icon' 	=> "<svg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M20,10 C20,4.49 15.51,0 10,0 C4.48,0 0,4.49 0,10 C0,15.52 4.48,20 10,20 C15.51,20 20,15.52 20,10 Z M7.78,15.37 L4.37,6.22 C4.92,6.2 5.54,6.14 5.54,6.14 C6.04,6.08 5.98,5.01 5.48,5.03 C5.48,5.03 4.03,5.14 3.11,5.14 C2.93,5.14 2.74,5.14 2.53,5.13 C4.12,2.69 6.87,1.11 10,1.11 C12.33,1.11 14.45,1.98 16.05,3.45 C15.37,3.34 14.4,3.84 14.4,5.03 C14.4,5.77 14.85,6.39 15.3,7.13 C15.65,7.74 15.85,8.49 15.85,9.59 C15.85,11.08 14.45,14.59 14.45,14.59 L11.42,6.22 C11.96,6.2 12.24,6.05 12.24,6.05 C12.74,6 12.68,4.8 12.18,4.83 C12.18,4.83 10.74,4.95 9.8,4.95 C8.93,4.95 7.47,4.83 7.47,4.83 C6.97,4.8 6.91,6.03 7.41,6.05 L8.33,6.13 L9.59,9.54 L7.78,15.37 Z M17.41,10 C17.65,9.36 18.15,8.13 17.84,5.75 C18.54,7.04 18.89,8.46 18.89,10 C18.89,13.29 17.16,16.24 14.49,17.78 C15.46,15.19 16.43,12.58 17.41,10 Z M6.1,18.09 C3.12,16.65 1.11,13.53 1.11,10 C1.11,8.7 1.34,7.52 1.83,6.41 C3.25,10.3 4.67,14.2 6.1,18.09 Z M10.13,11.46 L12.71,18.44 C11.85,18.73 10.95,18.89 10,18.89 C9.21,18.89 8.43,18.78 7.71,18.56 C8.52,16.18 9.33,13.82 10.13,11.46 L10.13,11.46 Z'></path></svg>",
			'width' => '20',
			'height' => '20',
			'value' => 'wordpress'
		]
	];

	return apply_filters( 'enable_button_icons_icons_update', $icons );
}

function enable_button_icons_render_block_button( $block_content, $block ) {
	
	if ( ! isset( $block['attrs']['icon'] ) ) {
		return $block_content;
	}

	$icon                = $block['attrs']['icon'];
	$positionLeft        = isset( $block['attrs']['iconPositionLeft'] ) ? $block['attrs']['iconPositionLeft'] : false;
	$justifySpaceBetween = isset( $block['attrs']['justifySpaceBetween'] ) ? $block['attrs']['justifySpaceBetween'] : false;

	// All available icon SVGs.
	$icons_obj = enable_button_icons_icons();

	// Convert to format already in use
	$icons = [];
	foreach( $icons_obj as $i ) {
		$icons[$i['value']] = $i['icon'];
	}

	// Make sure the selected icon is in the array, otherwise bail.
	if ( ! array_key_exists( $icon, $icons ) ) {
		return $block_content;
	}

	// Append the icon class to the block.
	$p = new WP_HTML_Tag_Processor( $block_content );
	if ( $p->next_tag() ) {
		$p->add_class( 'has-icon__' . $icon );
		if ( $justifySpaceBetween ) {
			$p->add_class( 'has-justified-space-between' );
		}
	}
	$block_content = $p->get_updated_html();

	if( $block['blockName'] === "core/button" ) {
		// Add the SVG icon either to the left of right of the button text.
		$block_content = $positionLeft 
			? preg_replace( '/(<a[^>]*>)(.*?)(<\/a>)/i', '$1<span class="wp-block-button__link-icon" aria-hidden="true">' . $icons[ $icon ] . '</span>$2$3', $block_content )
			: preg_replace( '/(<a[^>]*>)(.*?)(<\/a>)/i', '$1$2<span class="wp-block-button__link-icon" aria-hidden="true">' . $icons[ $icon ] . '</span>$3', $block_content );
	}
	else if( $block['blockName'] === "woocommerce/product-button" ) {
		$block_content = $positionLeft 
			? preg_replace( '/(<span[^>]*>)(.*?)(<\/span>)/i', '<span class="wp-block-button__link-icon" aria-hidden="true">' . $icons[ $icon ] . '</span>$1$2$3', $block_content )
			: preg_replace( '/(<span[^>]*>)(.*?)(<\/span>)/i', '$1$2$3<span class="wp-block-button__link-icon" aria-hidden="true">' . $icons[ $icon ] . '</span>', $block_content );
	}
	
	return $block_content;
}
add_filter( 'render_block_core/button', 'enable_button_icons_render_block_button', 10, 2 );
add_filter( 'render_block_woocommerce/product-button', 'enable_button_icons_render_block_button', 10, 2 );

function enable_button_icons_admin_scripts() {
	if( is_admin() ) {
		$icons = enable_button_icons_icons();
		// Load icons for Inspector Controls
		wp_localize_script( 'create-block-enable-button-icons-editor-script', 'enableButtonIcons', [ 'icons' => $icons ] );
		// Load icons for Editor
		$icon_styles = "";
		foreach( $icons as $i ) {
			$icon_styles .= "
				.wp-block-woocommerce-product-button[class*=has-icon__].has-icon__{$i['value']} .wp-block-button__link::after,
				.wp-block-woocommerce-product-button[class*=has-icon__].has-icon__{$i['value']} .wp-block-button__link::before,
				.wp-block-button[class*=has-icon__].has-icon__{$i['value']} .wp-block-button__link::after,
				.wp-block-button[class*=has-icon__].has-icon__{$i['value']} .wp-block-button__link::before {
					width: {$i['width']}px;
					height: {$i['height']}px;
					mask-image: url(\"data:image/svg+xml;utf8,{$i['icon']}\");
				}
			";
		}
	
		// error_log( $icon_styles, 0 );
		wp_add_inline_style( 'create-block-enable-button-icons-editor-style', $icon_styles );
	}
	else {
		// frontend
		$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
		foreach ( array_keys( $manifest_data ) as $block_type ) {
			wp_enqueue_style( "$block_type-frontend", plugin_dir_url( __FILE__ ) . "/build/$block_type/style-index.css", [], '1.0' );
		}
	}
}
add_action( 'enqueue_block_assets', 'enable_button_icons_admin_scripts' );