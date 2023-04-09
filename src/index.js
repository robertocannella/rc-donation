//var registerBlockType = wp.blocks.registerBlockType;
import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'rc/donation', {
	edit: function () {
		return <p>EDIT JSX</p>;
	},
	save: function () {
		return <p>SAVE JSX</p>;
	},
} );
