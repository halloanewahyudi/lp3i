const { LegacyESLint } = require('eslint/use-at-your-own-risk');
const colors = require('tailwindcss/colors.js');

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: {
					DEFAULT: '#004369',
					50: '#eef9ff',
					100: '#dcf3ff',
					200: '#b2e9ff',
					300: '#6ddaff',
					400: '#20c7ff',
					500: '#00b0ff',
					600: '#008ddf',
					700: '#0070b4',
					800: '#005f94',
					900: '#004369',
					950: '#003151',
				},

				secondary: {
					DEFAULT: '#009da5',
					50: '#effefd',
					100: '#c7fffc',
					200: '#90fff8',
					300: '#51f7f4',
					400: '#1de2e4',
					500: '#04c3c8',
					600: '#009da5',
					700: '#057980',
					800: '#0a5e65',
					900: '#0d4f54',
					950: '#002d33',
				},
				tertiary:'#ff0000'
			},
			container: {
				center: true,
				padding: {
					DEFAULT: '1rem',
					lg: '2rem',
					xl: '3rem',
					'2xl': '4rem',
				},
			},
			screens: {
				sm: '640px',
				md: '768px',
				lg: '1024px',
				xl: '1200px',
				'2xl': '1536px',
			},
			fontFamily: {
				sans: [
					'Nunito',
					'ui-sans-serif'
				]
			}
			
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
