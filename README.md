# Enable Button Icons

[![Playground Demo Link](https://img.shields.io/badge/Playground_Demo-v0.1.0-blue?logo=wordpress&logoColor=%23fff&labelColor=%233858e9&color=%233858e9)](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/ndiego/enable-button-icons/main/_playground/blueprint-github.json)

Easily add icons to Button blocks in WordPress.

This example plugin serves to demonstrate how you can extend core WordPress blocks. Feel free to tweak, modify, and make it your own.

## Customize Icons

Icons can be removed or added using the included filter.

``` php
// Remove an icon
function remove_an_icon( $icons ) {
	return array_filter( $icons, fn( $i ) => $i['value'] !== "wordpress" );
}
add_filter( 'enable_button_icons_icons_update', 'remove_an_icon',  20, 1 );

// Add am icon
function add_an_icon( $icons ) {
	// Icon must include width + height in both the SVG and array values
	$icons[] = [
		'label' => 'Book',
		'icon' 	=> "<svg xmlns='http://www.w3.org/2000/svg' width='14' height='16' viewBox='0 0 14 16'><path d='M3,0C1.34375,0,0,1.34375,0,3v10c0,1.65625,1.34375,3,3,3h10c.553125,0,1-.446875,1-1s-.446875-1-1-1v-2c.553125,0,1-.446875,1-1V1c0-.553125-.446875-1-1-1H3ZM3,12h8v2H3c-.553125,0-1-.446875-1-1s.446875-1,1-1ZM4,4.5c0-.275.225-.5.5-.5h6c.275,0,.5.225.5.5s-.225.5-.5.5h-6c-.275,0-.5-.225-.5-.5ZM4.5,6h6c.275,0,.5.225.5.5s-.225.5-.5.5h-6c-.275,0-.5-.225-.5-.5s.225-.5.5-.5Z'/></svg>",
		'width' => '14',
		'height' => '16',
		'value' => 'book'
	];
	return $icons;
}
add_filter( 'enable_button_icons_icons_update', 'add_an_icon' ,  20, 1 );
```